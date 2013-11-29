!DOCTYPE html> 
   <html> 
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
      <title>Answer Survey</title> 
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
      <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
	  <script type="text/javascript">
	  
	  function validation()
	  {
	  	alert('funtionality is under development.');
	  }
	  
	  </script>
   </head> 
<body> 
<div data-role="page" id="menu">
   <div data-role="header">
      <h1> <font size="+2"> iQ System  </font></h1>
   </div><!-- /header -->
   <div data-role="content"> 
   <!-- <form action="surveyDetail.php" method="post"> -->
   <table>
   <tr>
   <td>
   <div id="surveyLink" > Enter your Survey Link : </div>
   </td>
   <td>
   <input type="text" id="txtSurveyLink" name="txtSurveyLink" style="width:auto" />
   </td>
   </tr>
   <tr>
   <td>
   <input type="submit" id="btnSubmit" style="width:auto" value="Submit" onClick="validation()" />
   </td>
   <td>
   <input type="submit" id="btnCancel" style="width:auto" value="Cancel" />
   </td>
   </tr>
   </table>
   <!--</form> -->
   </div><!-- /content -->
   <div data-role="footer">
      <h4>Created by team-I</h4>
   </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>