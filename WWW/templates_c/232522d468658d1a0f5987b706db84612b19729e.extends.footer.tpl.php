<?php /* Smarty version Smarty-3.1.13, created on 2013-03-26 11:54:02
         compiled from "templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25200039351518b4330e307-37499716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '232522d468658d1a0f5987b706db84612b19729e' => 
    array (
      0 => 'templates/footer.tpl',
      1 => 1364298278,
      2 => 'file',
    ),
    'c4b580c19a5ef8f1efda8a191e734e911af3052e' => 
    array (
      0 => 'templates/staticpage.tpl',
      1 => 1364298836,
      2 => 'file',
    ),
    '774b026e1c61875471dd69ed3b74619bf725dfcc' => 
    array (
      0 => 'templates/nav.tpl',
      1 => 1364298476,
      2 => 'file',
    ),
    'f0f109d05c64df629f4e796edc308cec65bb638f' => 
    array (
      0 => 'templates/page.tpl',
      1 => 1364297992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25200039351518b4330e307-37499716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51518b43396c02_72100492',
  'variables' => 
  array (
    'page_metadescription' => 0,
    'page_metawords' => 0,
    'page_seo_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51518b43396c02_72100492')) {function content_51518b43396c02_72100492($_smarty_tpl) {?><!DOCTYPE html>
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
          <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
          <li><a href="/features">Features</a></li>
          <li><a href="/pricing">Pricing</a></li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/testimonials">Testimonials</a></li>
          <li><a href="/project/register">Register</a></li>
           <li><a href="/project/login">Login</a></li>
        </ul>
      </div><!-- /.nav-collapse -->
   </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->

<?php echo $_smarty_tpl->tpl_vars['page_content']->value;?>


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