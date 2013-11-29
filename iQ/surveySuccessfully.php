!DOCTYPE html> 
   <html> 
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
      <title>Survey Created Successfully</title> 
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
      <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
   </head> 
<body> 
<!-- this page is just a information page  for the user that its survey is saved successfully -->


<?php
/*$dbhandle = mysql_connect("localhost", "root", "")
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>"; 	
//select a database to work with
$selected = mysql_select_db("harrydb1",$dbhandle) 
  or die("Could not select harrydb1");
  echo "done";
  
  
		$username =$_POST[txtQuesions];
		$password =$_POST[txtAnswers];
		
	 
	   //insert all the questions related to the survey which is created by the survie 
	  $sql="INSERT INTO tblSurveyDetail (questions, answers)
VALUES
('$_POST[txtQuesions]','$_POST[txtQuesions]')";

$insert = mysql_query( $sql, $dbhandle );
	   if(! $insert )
	//if there is a error in it it will gives an error.
		{
  			die('Could not enter data: ' . mysql_error());
			//header("location:createSurvey.php");
		}
		else
		{
			echo "Entered data successfully\n";
			
		}  
	  
  */	
  ?>

<div data-role="page" id="menu">
   <div data-role="header">
      <h1> <font size="+2"> iQ System  </font></h1>
   </div><!-- /header -->
   <div data-role="content"> 
  <div> <center> <font color="#009900" size="+1"> Survey Creates SuccessFully </font> </center> </div>
  
  <div> <center> <font color="#009900" >Link for your Survey is ........ </font> </center> </div>
    <div> <center> <a href=""> admin@mobilesurvey.com/iQ </a> </center> </div>
  
   </div><!-- /content -->
   <div data-role="footer">
      <h4>Created by team-I</h4>
   </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>