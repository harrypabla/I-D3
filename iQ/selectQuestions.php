!DOCTYPE html> 
   <html> 
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
      <title>Select Questions</title> 
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
   <form action="surveySuccessfully.php" method="post"> 
  <table id="questions" style="width:100%">
  <tr>
   <td style="width:auto">
   <div>Q1 : How often you do Testing ? </div>
  <td>
  </tr>
  <tr>
  <td>
  <form> 
  <input type="radio" name="prep" value="ExtreamlyOften" >
      Extreamly Often<br>
      <input type="radio" name="prep" value="veryOften">
      very often<Br>
      <input type="radio" name="prep" value="neutral">
      Often<Br>
      <input type="radio" name="prep" value="poor" >
      Ok Ok<Br>
      <input type="radio" name="prep" value="very poor" >
      Not at all often
  </form>
  
  
  </td>
  </tr>
  <tr>
   <td style="width:auto">
   <br>
   <br>
   <div>Q2 : which tool you use for testing ? </div>
  <td>
  </tr>
  <tr>
  <td>
  <form> 
  <input type="radio" name="prep" value="Mccab Tool" >
      Mccab Tool<br>
      <input type="radio" name="prep" value="logiscope">
      Logiscope<Br>
      <input type="radio" name="prep" value="Junit">
      Junit<Br>
      
  </form>
  
  
  </td>
  </tr>
  
  <tr>
   <td style="width:auto">
   <br>
   <br>
   <div>Q2 : which tool you use for testing ? </div>
  <td>
  </tr>
  <tr>
  <td>
  <form> 
  <input type="radio" name="prep" value="Mccab Tool" >
      Mccab Tool<br>
      <input type="radio" name="prep" value="logiscope">
      Logiscope<Br>
      <input type="radio" name="prep" value="Junit">
      Junit<Br>
      
  </form>
  
  
  </td>
  </tr>
  
  <tr>
   <td style="width:auto">
   <br>
   <br>
   <div>Q2 : which tool you use for testing ? </div>
  <td>
  </tr>
  <tr>
  <td>
  <form> 
  <input type="radio" name="prep" value="Mccab Tool" >
      Mccab Tool<br>
      <input type="radio" name="prep" value="logiscope">
      Logiscope<Br>
      <input type="radio" name="prep" value="Junit">
      Junit<Br>
      
  </form>
  
  
  </td>
  </tr>
  
  
  <tr>
   <td style="width:auto">
   <br>
   <br>
   <div>Q2 : which tool you use for testing ? </div>
  <td>
  </tr>
  <tr>
  <td>
  <form> 
  <input type="radio" name="prep" value="Mccab Tool" >
      Mccab Tool<br>
      <input type="radio" name="prep" value="logiscope">
      Logiscope<Br>
      <input type="radio" name="prep" value="Junit">
      Junit<Br>
      
  </form>
  
  
  </td>
  </tr>
  
  </table>
  <table>
  <tr>
  <td>
  <input type="submit" value="Add Questions" id="addNewQuestion" onClick="location.href='addQuestions.php'">
  </td>
  <td>
  <input type="submit" value="Send Survey" id="sendSurvey">  
  </td>
  <td>
  <input type="submit" value="Cancel" id="Cancel">  
  </td>
  </tr>
  </table>
  </form>
  
    
   </div><!-- /content -->
   <div data-role="footer">
      <h4>Created by team-I</h4>
   </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>