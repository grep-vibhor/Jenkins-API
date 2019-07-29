<?php
include('../session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: ../index.php"); // Redirecting To Home Page 
}

?>

	<html>
	<head>
		<title>Console</title>
		<style>
			#button{
				position: absolute;
  				left: 0px;
  				width: 300px;
  				border: none;
  				padding: 10px;

			}
			#menu{
				position: absolute;
  				right: 0px;
  				width: 300px;
  				border: none;
  				padding: 10px;

			}
			#container{
				position: absolute;
				width: 600px;
				height: auto;
				border: 5px solid black;
				position: absolute;
				top:0;
				bottom: 0;
				left: 0;
				right: 0;
  				background: black;
				margin: auto;
				color: white;
				font-family: 'Lucida Console';
				overflow: auto;

			}
			#console{
				color: white;

			}
			

			ul{
			  	list-style: none;
				}
			 li{
 				display: inline;
 				padding: 30px;
			}

			
			a {
    			background-color: black;
  				box-shadow: 0 5px 0 darkred;
  				color: white;
  				padding: 1em 1.5em;
  				position: relative;
  				text-decoration: none;
  				text-transform: uppercase;
				}
		</style>
	</head>
	<body>
		<div id="button">
		<ul>
			<li><a href="../newBuild.php">New Build</a></li>
		</ul>
		</div>

		<div id="menu">
		<ul>
			<li><a href="../logout.php">Logout</a></li>
			
		</ul>

		</div>
		<div id='container'>
		<h1 align='center'>Console</h1>

		<div id="console">
		</div>

		</div>

	<script>
		function getUrlVars() {
   		 var vars = {};
    	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    		});
    return vars;
		}
		var result = getUrlVars()["result"];
		                                          // Append the text to <p>
		result = decodeURI(result);
		document.getElementById("console").innerText = result;  
	</script>
	</body>
	</html>
