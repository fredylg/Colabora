<?xml version='1.0'?>
<!-- <?php if(!defined('FW_LOADED')){ exit; } ?> -->
<configuration>
	<mode>
		<production>FALSE</production>
		<manageremail>fredylg@hotmail.com</manageremail>
	</mode>
	<databaseconfig>
		<dev>
		    <host>colabora.com</host>
		    <user>root</user>
		    <password></password>
		    <database>COLABORA</database>
		 </dev>
		 <production>
		    <host>colabora.com</host>
		    <user>root</user>
		    <password></password>
		    <database>COLABORA</database>
		 </production> 
	</databaseconfig>
	<staticpages>
	<url>home</url>
	<pageid>1</pageid>
	</staticpages>
	<staticpages>
	<url>login</url>
	<pageid>2</pageid>
	</staticpages>
	<controllers>
	 	<controller>admin</controller>
	 	<controller>profile</controller>
	 	<controller>application</controller>
	 </controllers> 
</configuration>