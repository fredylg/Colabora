<?php /* Smarty version Smarty-3.1.13, created on 2013-03-29 08:49:00
         compiled from "templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15302655015155557c207359-06206867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '579ddfbc4c5bde66f3ba2a9cce98fcba6fc90ba5' => 
    array (
      0 => 'templates/footer.tpl',
      1 => 1364299911,
      2 => 'file',
    ),
    '571b7be1a4c1d9c63385b2dd0bd578bfe4d6d489' => 
    array (
      0 => 'templates/dbpage.tpl',
      1 => 1364300006,
      2 => 'file',
    ),
    '774b026e1c61875471dd69ed3b74619bf725dfcc' => 
    array (
      0 => 'templates/nav.tpl',
      1 => 1364299824,
      2 => 'file',
    ),
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1364299146,
      2 => 'file',
    ),
    'f0f109d05c64df629f4e796edc308cec65bb638f' => 
    array (
      0 => 'templates/page.tpl',
      1 => 1364299875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15302655015155557c207359-06206867',
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
  'unifunc' => 'content_5155557c475bc6_38155994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5155557c475bc6_38155994')) {function content_5155557c475bc6_38155994($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['page_metadescription']->value;?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['page_metawords']->value;?>
" />
<meta name="Distribution" content="Global" />
<meta name="Robots" content="index,follow" />
<!-- css -->
<link href='http://fonts.googleapis.com/css?family=Clicker+Script|Gabriela' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet"  /> 
<link href="css/form.css" rel="stylesheet"  />
<link href="css/ie.css" rel="stylesheet"  />
<link href="css/jquery-ui-1.10.1.custom.css" rel="stylesheet"  /> 
<link href="css/main.css" rel="stylesheet"  /> 
<link href="css/screen.css" rel="stylesheet"  />
<link href="css/styles.css" rel="stylesheet"  />
<title><?php echo $_smarty_tpl->tpl_vars['page_seo_title']->value;?>
</title>
<!-- <link href="/images/template/favicon.ico" type="image/x-icon" rel="shortcut icon"> -->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- slider -->
<link href="css/royalslider.css" rel="stylesheet" /> 
<link href="css/royalslidertheme.css" rel="stylesheet" />
<script src="js/jqueryeassing.js" type="application/javascript" ></script>
<script src="js/royalslider.js" type="application/javascript" ></script>
<!-- -->

</head>
<body>
	

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="nav-collapse offset1 ">
        <ul class="nav">
          <li class="active"><a href="/"><i class="icon-home icon-white"></i> Home</a></li>
          <li><a href="/features">Features</a></li>
          <li><a href="/pricing">Pricing</a></li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/testimonials">Testimonials</a></li>
          <li><a href="/register">Register</a></li>
           <li><a href="/login">Login</a></li>
        </ul>
      </div><!-- /.nav-collapse -->
   </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->

   <div id="main-container">
       <div class="row-fluid">
       	<?php echo $_smarty_tpl->tpl_vars['page_content']->value;?>

      </div>
   </div>
   <!-- /main container --> 

	<!-- footer -->
   <div id="footer-container"  class="row-fluid">
   <div class="span3 offset1"><small>&copy;Colabora 2013 All Rights Reserved.</small></div>
   <div class="span2 offset4"><small>Digital Pleasure Inc.</small></div>
   </div>

	<!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	jQuery(document).ready(function(){
		

	});
    </script>
</body>
</html><?php }} ?>