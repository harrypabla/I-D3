!DOCTYPE html> 
   <html> 
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
      <title>Create Survey</title> 
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
      <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
	  
	 <script type="text/javascript">
	  function validation()
	  {
	  		var username = document.getElementById("txtUserName").value;
			var passowrd = document.getElementById("txtPassword").value;
			
			if ( username != "admin" && passowrd !="admin")
			{
				alert ("invalid usename / password ");
   			}
			else 
			{
				location.href="userProfile.php";
			}
	  }
	  
	  
	  </script>
	  
	  
   </head> 
<body> 
<div data-role="page" id="menu">
   <div data-role="header">
      <h1> <font size="+2"> iQ System  </font></h1>
   </div><!-- /header -->
 <!-- <form action="userProfile.php" method="post"> -->
  
  
 
 
  
   <div data-role="content"> 
   <table>
   <tr>
   <td>
		<div id="divUserName" style="width:auto"> User Name : </div>
   </td>
   <td>   
 	 	<!--<textarea id="txtUserName" style="width:100%"> </textarea> -->
		<input id="txtUserName" name="txtUserName" type="text" maxlength="20" style="width:auto"> 
		
   </td>
   </tr>
   <tr>
   <td>
		<div id="divPassword" style="width:auto"> Password  : </div>
   </td>
   <td>   
 	 	
		<input id="txtPassword" type="password" name="txtPassword" maxlength="20" style="width:auto"> 
		
   </td>
   </tr>
   </tr>
   <tr>
   <td>
	<input type="submit" id="btnSubmit" name="Login" value="Submit" style="width:auto"  onClick="validation()"/>
	
   </td>
   <td>   
 	 	<input type="button" id="btn" name="Cancel" value="Cancel" style="width:auto" onClick="alert('hii')"/>	
		
   </td>
   </tr>
   <tr>
   <td colspan="2"> 
    <center> OR  <a href="regirster.php"> <b> <font color="#FF0000"> Register Here </font> </b></a></center>
   </td>
   </tr>
   </table>
   <div id="regirster"> 
                         
   
   </div>
   </div><!-- /content -->
   <!--</form> -->
   <div data-role="footer">
      <h4>Created by team-I</h4>
   </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>