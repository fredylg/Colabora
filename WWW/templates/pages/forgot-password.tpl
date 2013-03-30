{block name=body}
{block name=nav}{/block}
   <div id="main-container">
       <div class="row-fluid">
       	<!--  content -->
       		 <div id="main-container">
			       <div class="row-fluid">
			      	<div id="login" class="span5 offset3">
			       		<form class="form-horizontal" name="Loginform" action="/includes/processes/processes.php" onsubmit="return validateForm()" method="post" autocomplete="off">
			       		 <div class="control-group"></div>
			       		 <div class="control-group">
			       		 <legend><h2>Forgot password</h2></legend>
			       		 </div>
			       		{if $notice neq ''}
			       		 <div class="alert alert-info">
						 {$notice}
						</div>
						{/if}
						  <div class="control-group">
						    <label class="span4" for="inputEmail"><h2>Email</h2></label>
						    <div class="span3">
						      <input type="text" id="inputEmail" placeholder="Email" name="email" class="req email" data-content="enter a valid email" >
						    </div>
						  </div>
						  <div class="span4 offset3">
						   <button type="submit" class="btn btn-info">SUBMIT</button>
						  
						  </div>
						  <div class="span4 offset3">
						   <a href="/create-account"><small>create account</small></a>
						  </div>
						  {$token}
						  <input type="hidden" name="Action" id="forgot-password" value="forgot-password" />
						</form>
					</div>
			   </div>
       	<!== /content -->
      </div>
   </div>
  <script type="text/javascript" src="/js/validation.js"></script>
   <!-- /main container --> 
{/block}