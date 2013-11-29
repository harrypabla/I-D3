!DOCTYPE html> 
   <html> 
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
      <title>Registration</title> 
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
      <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
   </head> 
<body> 
<div data-role="page" id="menu">
   <div data-role="header">
      <h1> <font size="+2"> iQ System  </font></h1>
   </div><!-- /header -->
   <div data-role="content"> 
  <table>
   <tr>
   <td>
		<div id="divUserName" style="width:auto"> Enter User Name : </div>
   </td>
   <td>   
 	 	<!--<textarea id="txtUserName" style="width:100%"> </textarea> -->
		<input id="txtUserName" type="text" maxlength="20" style="width:auto"> 
		
   </td>
   </tr>
   <tr>
   <td>
		<div id="divPassword" style="width:auto"> Enter Password  : </div>
   </td>
   <td>   
 	 	
		<input id="txtPassword" type="password" maxlength="20" style="width:auto">
		  
		
   </td>
   </tr>
   </tr>
   <tr>
   <td>
		<div id="divPassword" style="width:auto"> Confirm Password  : </div>
   </td>
   <td>   
 	 	
		<input id="txtConfirmPassword" type="password" maxlength="20" style="width:auto"> 
		
   </td>
   </tr>
   </tr>
   
   <tr>
   <td>
		<input type="button" id="btnSubmit" name="Login" value="Register" style="width:auto" onClick="">
   </td>
   <td>   
 	 	<input type="button" id="btn" name="Cancel" value="Cancel" style="width:auto">	
		
   </td>
   </tr>
   
   </table>
   </div><!-- /content -->
   <div data-role="footer">
      <h4>Created by team-I</h4>
   </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>