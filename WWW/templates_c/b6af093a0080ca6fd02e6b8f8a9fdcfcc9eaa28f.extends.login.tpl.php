<?php /* Smarty version Smarty-3.1.13, created on 2013-03-29 13:18:10
         compiled from "templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55815618515566c03a5275-70515135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6af093a0080ca6fd02e6b8f8a9fdcfcc9eaa28f' => 
    array (
      0 => 'templates/login.tpl',
      1 => 1364563086,
      2 => 'file',
    ),
    '9206ffe216f3f7c2e7655782292928f7d20e8be5' => 
    array (
      0 => 'templates/footer.tpl',
      1 => 1364299911,
      2 => 'file',
    ),
    '774b026e1c61875471dd69ed3b74619bf725dfcc' => 
    array (
      0 => 'templates/nav.tpl',
      1 => 1364299824,
      2 => 'file',
    ),
    'f0f109d05c64df629f4e796edc308cec65bb638f' => 
    array (
      0 => 'templates/page.tpl',
      1 => 1364299875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55815618515566c03a5275-70515135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_515566c0431781_66315587',
  'variables' => 
  array (
    'page_metadescription' => 0,
    'page_metawords' => 0,
    'page_seo_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515566c0431781_66315587')) {function content_515566c0431781_66315587($_smarty_tpl) {?><!DOCTYPE html>
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
       	<!--  content -->
       		 <div id="main-container">
			       <div class="row-fluid">
			      	<div id="login" class="span5 offset3">
			       		<form class="form-horizontal" name="Loginform" action="/includes/processes/processes.php" onsubmit="return validateForm()" method="post" autocomplete="off">
			       		 <div class="control-group"></div>
			       		 <div class="control-group">
			       		 <legend><h1>Welcome to Colabora</h1></legend>
			       		 </div>
			       		<?php if ($_smarty_tpl->tpl_vars['error']->value!=''){?>
			       		 <div class="alert alert-error">
						 <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

						</div>
						<?php }?>
						  <div class="control-group">
						    <label class="span4" for="inputEmail"><h2>Email</h2></label>
						    <div class="span3">
						      <input type="text" id="inputEmail" placeholder="Email" name="email" class="req email" data-content="enter a valid email" >
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="span4" for="inputPassword"><h2>Password</h2></label>
						    <div class="span4">
						      <input type="password" id="inputPassword" placeholder="Password" name="password" class="req" data-content="enter your password" >
						      <span class="help-block"><a href="/forgot-password" class="left"><small>forgot password</small></a></span>
						    </div>
						  </div>
						  <div class="span4 offset3">
						   <button type="submit" class="btn btn-info">LOGIN</button>
						  
						  </div>
						  <div class="span4 offset3">
						   <a href="/create-account"><small>create account</small></a>
						  </div>
						  <?php echo $_smarty_tpl->tpl_vars['token']->value;?>

						  <input type="hidden" name="Action" id="login" value="Login" />
						</form>
					</div>
			   </div>
       	<!== /content -->
      </div>
   </div>
  <script type="text/javascript" src="/js/validation.js"></script>
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