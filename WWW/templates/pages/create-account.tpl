{block name=body}
{block name=nav}{/block}
   <div id="main-container">
       <div class="row-fluid">
       	<!--  content -->
       		 <div id="main-container">
			       <div class="row-fluid">
			      	<div id="login" class="span4 offset2">
			       		<form class="form-horizontal" name="Loginform" action="/includes/processes/processes.php" onsubmit="return validateForm()" method="post" autocomplete="off">
			       		 <div class="control-group"></div>
			       		 <div class="control-group">
			       		 <legend><h2>Start taking control of all your projects</h2></legend>
			       		 </div>
			       		{if $error neq ''}
			       		 <div class="alert alert-error">
						 {$error}
						</div>
						{/if}
						<div class="controls-row">
						   <div class="span4 offset1">
						   <label for="name" class="left"><h2>Name*:</h2></label>
						   </div>
						</div>   
						<div class="controls-row">
						    <div class="span4 offset1">
						    <input type="text" placeholder="Name" name="name" id="name" class="req input-xlarge" >
						    <span class="help-block"></span>
						    </div>
						</div>   
						<div class="controls-row">
						   <div class="span4 offset1">
						   <label for="surname" class="left"><h2>Surname:</h2></label>
						    <span class="help-block"></span>
						   </div>
					    </div>   
						<div class="controls-row">	   
						    <div class="span4 offset1">
						    <input type="text" placeholder="Surname" name="surname" id="surname" class="input-xlarge" >
						     <span class="help-block"></span>
						    </div>
						</div>   
						<div class="controls-row">
							<div class="span4 offset1">
						    <label for="inputEmail" class="left" ><h2>Email*:</h2></label>
						     <span class="help-block"></span>
						    </div>
						</div>   
						<div class="controls-row">    
						    <div class="span4 offset1">
						      <input type="text" id="inputEmail" placeholder="Email" name="email" class="req email input-xlarge" data-content="enter a valid email" >
						    	<span class="help-block"></span>
						    </div>
						</div>   
						<div class="controls-row">
							<div class="span4 offset1">
						    <label for="team" class="left" ><h2>Team name:</h2></label>
						    </div>
						</div>   
						<div class="controls-row">    
						    <div class="span4 offset1">
						      <input type="text" id="inputEmail" placeholder="Your team's name" name="team" class="input-xlarge" data-content="enter a valid email" >
						    	<span class="help-block"></span>
						    </div>
						</div>  
						<div class="controls-row">
							<div class="span3"></div>
							 <button type="submit" class="btn btn-info">SUBMIT</button>
						</div>
						<div class="controls-row">
						   <div class="span4 offset1">
						  <small class="left">* denotes required field</small>
						  </div>
						 </div> 
						 {$token}
						  <input type="hidden" name="Action" id="create-account" value="create-account" />
						</form>
					</div>
					<div id="login" class="span4 ">
						<s>HERE SOME COOL CONTENT !!!!</s>
					</div>
					</div>
					
			   </div>
       	<!== /content -->
      </div>
   </div>
  <script type="text/javascript" src="/js/validation.js"></script>
   <!-- /main container --> 
{/block}