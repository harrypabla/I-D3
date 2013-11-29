!DOCTYPE html> 
   <html> 
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
      <title>Create New Survey</title> 
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
      <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
   </head> 
<body> 
<div data-role="page" id="menu">
   <div data-role="header">
      <h1> <font size="+2"> iQ System  </font></h1>
   </div><!-- /header -->
   
   <form  action="selectQuestions.php" method="post">
   
   <div data-role="content"> 
 
    
   <table style="width:40%">
	<tr>
	<td style="width:20%">
		<div id="divSurveyName" style="width:auto"> Survey Name : </div>
	</td>
	<td>
		<input id="txtSurveyName" type="text" maxlength="50" style="width:auto">
	</td>
	</tr>
	<tr>
	<td>
		<div id="divCategory" style="width:auto"> Category : </div>
	</td>
	<td >
		<select id="selectCategory" >
		<option value="0" selected="selected" id="tester">--Select Category-- </option>
		<option value="tester" id="tester">Tester </option>
		<option id="marketing" value="marketing">Marketing </option>
		<option id="HR" value="HR">HR</option>
		</select>
	</td>
	</tr>
	</table>
	<table>
	<tr>
   <td>
		<input type="submit" id="btnSubmit" name="Continue" value="Continue" style="width:10%"  >
   </td>
   <td>   
 	 	<input type="button" id="btn" name="Cancel" value="Cancel" style="width:1%">	
		
   </td>
   </tr>
	
	</table>

	
   </div><!-- /content -->
   
   </form>
   <div data-role="footer">
      <h4>Created by team-I</h4>
   </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>