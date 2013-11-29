!DOCTYPE html> 
   <html> 
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
      <title>Add Questions</title> 
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
      <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
	  
	  <script type="text/javascript">
	  function add()
	  {
	  		//var element = document.createElement ('input');
			var name = document.getElementById("txtAnswer").value;
			var element = document.createElement("input");
   			alert (name);
   			element.setAttribute("type", "radio");
			element.setAttribute("name", name);
			element.setAttribute("id", "feed");
			element.setAttribute("value", "line");
			
			var answer = document.getElementById("answer1");			
			answer.appendChild(element);
			
			var label=document.createTextNode(name);
		    answer.appendChild(label);
   
   			var br = document.createElement("br");
   			answer.appendChild(br);
			
			document.getElementById("txtAnswer").value=null;
			
	  }
	  
	  function Confirm()
	  {
	  	var question = document.getElementById("txtQuestion").value;
		var answer = document.getElementById("question1");
		var label=document.createTextNode(question);
		    answer.appendChild(label);
			
			//document.getElementById("btnAnswer").disabled= true;
	  }
	  </script>
	  
   </head> 
<body> 
<div data-role="page" id="menu">
   <div data-role="header">
      <h1> <font size="+2"> iQ System  </font></h1>
   </div><!-- /header -->
   <div data-role="content"> 
   <form>
   <tr>
   <td>
   <div id="question" > Question Text : </div>
   </td>
   </tr>
   <tr>
   <td>
   <input type="text" id="txtQuestion" name="txtQuestion" style="width:70%"/>
   </td>
   </tr>
   <tr>
   <td>
   <div id="answer" > Answer Choice : </div>
   </td>
   </tr>
   <tr>
   <td>
   <input type="text" id="txtAnswer" name="txtAnswer" style="width:50%"/>
   </td>
   </tr>
   <tr>
   <td>
   <input type="button" value="add Another Answer" id="btnAnswer" onClick="add()"/>
   </td>
   <td>
   <input type="button" value="Save question" id="btnQuestion" onClick="Confirm()"/>
   </td>
   
   </tr>
   </form>
  
   <div id="question1" > 
   
   </div>
   
   <div id="answer1" > 
   <form>
   </form>
   </div>
   
   
   
   </div><!-- /content -->
   
   
   
   <div data-role="footer">
      <h4>Created by team-I</h4>
   </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>