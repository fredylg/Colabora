<?php /* Smarty version Smarty-3.1.13, created on 2013-03-25 11:38:35
         compiled from "templates/staticpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3222094405150373b00e2f1-19209771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59981438c9471f7d55acbb089adb3789cec0ebe1' => 
    array (
      0 => 'templates/staticpage.tpl',
      1 => 1364211142,
      2 => 'file',
    ),
    'f0f109d05c64df629f4e796edc308cec65bb638f' => 
    array (
      0 => 'templates/page.tpl',
      1 => 1364211505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3222094405150373b00e2f1-19209771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_metadescription' => 0,
    'page_metawords' => 0,
    'page_seo_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5150373b085e23_35319671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5150373b085e23_35319671')) {function content_5150373b085e23_35319671($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
<head>
	<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['page_metadescription']->value;?>
" />
	<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['page_metawords']->value;?>
" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />		
	<meta name="Distribution" content="Global" />
	<meta name="Robots" content="index,follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title><?php echo $_smarty_tpl->tpl_vars['page_seo_title']->value;?>
</title>
	<!-- <link href="/images/template/favicon.ico" type="image/x-icon" rel="shortcut icon"> -->
	 <script src="http://code.jquery.com/jquery.js"></script>

	

</head>
<body>
	
this is the body

	

<!-- Placed at the end of the document so the pages load faster -->
    <script src="/includes/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	jQuery(document).ready(function(){
		

	});
    </script>
</body>
</html><?php }} ?>