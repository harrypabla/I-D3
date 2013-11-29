!DOCTYPE html> 
   <html> 
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
      <title>User Profile view</title> 
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
      <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
   </head> 
<body> 
<?php 

// checks the authoentication of the user if its valid then it redeirects to the user profile else it gives an error 

  //function insert()
  //{
  $dbhandle = mysql_connect("localhost", "root", "")
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>"; 	
//select a database to work with
$selected = mysql_select_db("harrydb1",$dbhandle) 
  or die("Could not select harrydb1");
  echo "done";
  
  
		$username =$_POST[txtUserName];
		$password =$_POST[txtPassword];
		$retrive ="select * from logintable where username='$username' and password='$password' ";
	   
	   
	   $fetch=mysql_query( $retrive);
	   
	   while($row = mysql_fetch_assoc($retrive)) {
    			$fromID = $row['uid'];
				echo  $fromID;
		}
	   
	  // $count=mysql_num_rows($fetch);
	   
	   
	   
	   
	   
  //}
  mysql_close ($dbhandle);
  
  ?>



<div data-role="page" id="menu">
   <div data-role="header">
      <h1> <font size="+2"> iQ System  </font></h1>
   </div><!-- /header -->
   <div data-role="content"> 
   </br>  
      <a href="newSurvey.php" > <b> <center>  Create New Survey  </center> </b> </a> </br>
	  <a href=""> <b> <center>  View All Surveys  </center> </b> </a>  
   </div><!-- /content -->
   <div data-role="footer">
      <h4>Created by team-I</h4>
   </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>