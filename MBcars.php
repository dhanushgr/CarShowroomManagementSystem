<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

    <style>



body {font-family: Arial, Helvetica, sans-serif}


body {
    padding: 0;
    margin: 0;
}




.bg-img {
  /* The image used */
  background-image: url("images/14.png");
  margin: 0%;
  padding: 0%;
  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}


.column {
  float: left;
  width: 33.33%;
  padding: 60px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: block;
}


/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
  
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}



h2{ 
   padding: 0%;
   margin: 0%;
   text-align: center;
   
  
  }
 



	</style>

</head>

<body>
  <div class="bg-img">

    <div class="topnav">
    <?php
       if(isset($_SESSION['s_name']))
           {
			      
					   echo '<a href="logout.php">Logout</a>' ;
					   echo ' <a href="order.php">Orders</a>' ;
					   echo ' <a href="about.php">About</a>' ;
             echo '<a href="contact.php">Contact</a>';
             echo ' <a href="book.php">Book</a>';
             echo '<a href="brands.php">Brands</a>' ;
		         echo '<a href="indexlogin.php">Home</a>' ;
             }
       else
          {
         
					 echo ' <a href="signup.php">Sign Up	</a>';
					 echo ' <a href="login.php">Login</a>';
					 echo '<a href="about.php">About</a>';
					 echo '<a href="contact.php">Contact</a>';
           echo ' <a href="brands.php">Brands</a>';
           echo ' <a href="index.php">Home</a>';
           
          }

  ?>
   
      </div>

	<div class="row">
		<div class="column">
			<img src="images/benzcclass3.webp" alt="mbclass" style="width:100%"><h2 style="color:cyan;"><b><a href="Bcclass.php" style="color: cyan;">Mercedes C Class</a></b></h2>
		</div>

    
		<div class="column">
			<img src="images/benzgla_3.jpg" alt="mbgla" style="width:100%; height: 290px;"><h2 style="color:cyan;"><b><a href="benzgla.php" style="color: cyan;">Mercedes GLA</a></b></h2>
		</div>
		
	  </div>



	  <div class="row">
		<div class="column">
		    <img src="images/benzeclass3.jpg" alt="mbeclass" style="width:100%"><h2 style="color:cyan;"><b><a href="benzeclass.php" style="color: cyan;">Mercedes E Class</a></b></h2>
		</div>
		<div class="column">
			<img src="images/benzsclass4.webp" alt="mbsclass" style="width:100%; height: 250px;"><h2 style="color:cyan;"><b><a href="benzsclass.php" style="color: cyan;">Mercedes S Class</a></b></h2>
		</div>
		
    </div>  
  </div>
</body>

</html>