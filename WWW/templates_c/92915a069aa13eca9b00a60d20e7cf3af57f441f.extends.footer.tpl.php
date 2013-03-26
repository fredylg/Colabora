<?php /* Smarty version Smarty-3.1.13, created on 2013-03-26 12:25:49
         compiled from "templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182970114851519353d47644-16394219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92915a069aa13eca9b00a60d20e7cf3af57f441f' => 
    array (
      0 => 'templates/footer.tpl',
      1 => 1364299911,
      2 => 'file',
    ),
    '751acb1ad3667f0554ba06e5ad0c1ed153ed790c' => 
    array (
      0 => 'templates/homepage.tpl',
      1 => 1364300745,
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
  'nocache_hash' => '182970114851519353d47644-16394219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51519354087aa9_52669435',
  'variables' => 
  array (
    'page_metadescription' => 0,
    'page_metawords' => 0,
    'page_seo_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51519354087aa9_52669435')) {function content_51519354087aa9_52669435($_smarty_tpl) {?><!DOCTYPE html>
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

<header class="row-fluid" id="overview">
       <div class="media-heading span4 offset2">
      		<div id="slider-with-blocks-1" class="royalSlider">
            	<div class="rsContent slide1">
                    <h1 class="rsABlock" data-fade-effect="true" data-delay="100" >Colabora</h1>
                    <p class=" rsABlock" data-delay="400" data-move-effect="left" >Get your projects going...</p>
                </div>    
                <div class="rsContent slide2">
                     <span data-move-effect="right" class="span-slide2 rsABlock" data-delay="300"  >MAKE YOUR PROJECTS GO →</span>
                </div>
                <div class="rsContent slide3">
                     <span  class="span-slide3 rsABlock txtCent" data-fade-effect="none" >FASTER!</span>
                </div>        
        </div>    
 </header>
 <!-- /head --> 
   <!-- main container --> 
   <div id="main-container">
       <div class="row-fluid">
       	<?php echo $_smarty_tpl->tpl_vars['page_content']->value;?>

      </div>
   </div><script>
      jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({
			autoScaleSlider:true,
			autoScaleSliderHeight:320,
			fadeinLoadedSlide:true,
			autoPlay: {
    			enabled: true,
    			pauseOnHover: true,
				delay:1800
			},
			transitionType:'fade',
            blockLoop: true,
			loop: true,
			keyboardNavEnabled: true,
		});  
    });
	 </script>
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