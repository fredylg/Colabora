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
			       		 <legend><h1>Welcome to Colabora</h1></legend>
			       		 </div>
			       		{if $error neq ''}
			       		 <div class="alert alert-error">
						 {$error}
						</div>
						{/if}
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
						  {$token}
						  <input type="hidden" name="Action" id="login" value="Login" />
						</form>
					</div>
			   </div>
       	<!== /content -->
      </div>
   </div>
  <script type="text/javascript" src="/js/validation.js"></script>
   <!-- /main container --> 
{/block}