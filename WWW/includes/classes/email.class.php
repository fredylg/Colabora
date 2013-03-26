<?
	class Email
	{
		var $emailheader = "";
		var $textheader = "";
		var $textboundary = "";
		var $emailboundary = "";
		var $charset = "";
		var $subject_text = "";
		var $receiver = "";
		var $attachment = array();
		var $cc = array();
		var $bcc = array();

		
		function __construct()
		{
			$this->textboundary = uniqid(time());
			$this->emailboundary = uniqid(time());
			$this->charset = "ISO-8859-1";
		}

		function SetCharSet($char)
		{
			$this->charset = $char;
		}


		function Validate_email($mailadresse)
		{
			if(!preg_match("/[a-z0-9_-]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z-]*[0-9a-z]\.)+([a-z]{2,4})/i",$mailadresse))
			{
				die('Wrong email address  '.$mailadresse.' ');
			}
			return $mailadresse;
		}

		function from($name,$email)
		{
			$this->emailheader .= 'From: '.$name.'<'.$email.'>'."\r\n";
		}

		function to($to)
		{
			$this->receiver = $this->Validate_email($to);
		}

		
		function cc($copy)
		{
			$this->cc[] = $copy;
		}

		function bcc($copy)
		{
			$this->bcc[] = $copy;
		}

		function makeMimeMail()
		{
			if(count($this->cc) > 0)
			{
				$this->emailheader .= 'Cc: ';
				for($i=0;$i<count($this->cc);$i++)
				{
					if($i > 0) $this->emailheader .= ',';
					$this->emailheader .= $this->Validate_email($this->cc[$i]);
				}
				$this->emailheader .= "\r\n";
			}

			if(count($this->bcc) > 0)
			{
				$this->emailheader .= 'Bcc: ';
				for($j=0;$j<count($this->bcc);$j++)
				{
					if($j > 0) $this->emailheader .= ',';
					$this->emailheader .= $this->Validate_email($this->bcc[$j]);
				}
				$this->emailheader .= "\r\n";
			}
			$this->emailheader .= 'MIME-Version: 1.0'."\r\n";
		}

		function subject($subject)
		{
			$this->subject_text = $subject;
		}

		function text($text)
		{
			$this->textheader .= 'Content-Type: multipart/alternative; boundary="'.$this->textboundary.'"'."\r\n\r\n";
			$this->textheader .= '--'.$this->textboundary."\r\n";
			$this->textheader .= 'Content-Type: text/plain; charset="'.$this->charset.'"'."\r\n";
			$this->textheader .= 'Content-Transfer-Encoding: quoted-printable'."\r\n\r\n";
			$this->textheader .= strip_tags($text)."\r\n\r\n";
			$this->textheader .= '--'.$this->textboundary."\r\n";
			$this->textheader .= 'Content-Type: text/html; charset="'.$this->charset.'"'."\r\n";
			$this->textheader .= 'Content-Transfer-Encoding: quoted-printable'."\r\n\r\n";
			$this->textheader .= '<html><body>'.$text.'</body></html>'."\r\n\r\n";
			$this->textheader .= '--'.$this->textboundary.'--'."\r\n\r\n";
		}

		function attachment($file)
		{
			if(is_file($file))
			{
				$attachment_header = '--'.$this->emailboundary."\r\n" ;
				$attachment_header .= 'Content-Type: application/octet-stream; name="'.basename($file).'"'."\r\n";
				$attachment_header .= 'Content-Transfer-Encoding: base64'."\r\n";
				$attachment_header .= 'Content-Disposition: attachment; filename="'.basename($file).'"'."\r\n\r\n";

				$file['content'] = fread(fopen($file,"rb"),filesize($file));
				$file['content'] = base64_encode($file['content']);
				$file['content'] = chunk_split($file['content'],72);

				$this->attachment[] = $attachment_header.$file['content']."\r\n";
			}
			else
			{
				die(' there is no file on =  "'.$file.'" '."\r\n");
			}
		}

		function send()
		{
			$this->makeMimeMail();

			$header = $this->emailheader;

			if(count($this->attachment)>0)
			{
				$header .= 'Content-Type: multipart/mixed; boundary="'.$this->emailboundary.'"'."\r\n\r\n";
				$header .= '--'.$this->emailboundary."\r\n";
				$header .= $this->textheader;

				if(count($this->attachment) > 0) $header .= implode("",$this->attachment);

				$header .= '--'.$this->emailboundary.'--';
			}
			else
			{
				$header .= $this->textheader;
			}
			
			mail($this->receiver,$this->subject_text,"",$header);

			$this->deletememory();
		}

	
		function deletememory()
		{
			unset($this->emailheader);
			unset($this->textheader);
			unset($this->attachment);
		}
	}
?>