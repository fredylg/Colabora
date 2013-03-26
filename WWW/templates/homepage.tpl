{block name=body}
{block name=nav}{/block}
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
       	{$page_content}
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
   {/block}