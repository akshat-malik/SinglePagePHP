<!DOCTYPE html>
<html lang="en">
<?php
$init="DBManagementProject.localhostByAkshatMalik";
?>
<head>

<meta charset="utf-8">
<title>Index</title>
<style type="text/css">
    ul{
        padding: 0;
        list-style: none;
        background: #f2f2f2;
    }
    ul li{
        display: inline-block;
       
        text-align: left;
    }
 ul li a{
        display:block;
        padding: 8px 25px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover{
        color: #fff;
        background: #939393;
    }
    ul li ul.dropdown{
        min-width: 100%; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
</style>
</head>

<body>
<img src="logo.png" height="50" width="50";/><p style="text-align:right"><?php echo$init;?></p>
<div id="upper">
    <ul>
        <li><a href="index.php?i=1">Home</a></li>
        
		<li><a href="index.php?i=2">Login</a>
		
        <li>
            Register&#9662;
            <ul class="dropdown">
                <li><a href="index.php?i=3">As Admin</a></li>
                <li><a href="index.php?i=4">As Client</a></li>
                
            </ul>
        </li>
		<li><a href="index.php?i=5">Contact Us</a></li>
        
    </ul>
	</div>
	<div id="main">
	<?php
	   if(isset($_GET['i']))
	   {
		   switch($_GET['i'])
		   {
		   case "1": include("home.php");
						break;
			case "2": include("login.php");
						break;
			case "3": include("registeradmin.php");
						break;
			case "4": include("register.php");
						break;
			case "5": include("contactus.php");
						break;
			case "6": include("a_welcome.php");
						break;
			case "7": include("u_welcome.php");
							break;
				
						
	   
		   }
		   }
	?>
	
	</div>
</body>
</html>