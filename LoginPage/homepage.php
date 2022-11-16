<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume -</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">


	  
	  <body>
	 
		
		<form action="homepage.php" method="post">
			
				
			</div>
			
	</div>
	
	      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h2 class="mb-0">Welcome <?php echo $_SESSION['username']; ?></h3></center>
          
          </h2>
		  
		  
		 
          
        
        </div>
		
      </section>
	  
	  <!-- formmmmmmmmmmmmmmmmmm -->
	  
	<!DOCTYPE html>


<body bgcolor="#ffffff">

<form name="resume" action="homepage.php" method="POST">

     <p  style="color:black;" style="font-family: sans-serif" ><font      
     size="3"><b>Please
     enter your information in the form below and the attach your resume.       
     </font></b> </p>


     1) First Name:  <input type="text" name="firstName" maxlength="15" 
        size="15" style="background-color: white ;color:black"> <br/><br/>
     2) Last Name:  <input type="text" name="lastName" maxlength="15" 
        size="15" style="background-color: white ;color:black"> <br/><br/>
     3) Email Address:  <input type="text" name="email" 
        maxlength="40" size="45" style="background-color: white 
        ;color:black"> <br/><br/>  
     4) Mobile:  <input type="text" 
        name="mobile" maxlength="15" size="15" style="background- 
        color: white ;color:black"><br/>
		<P></p>
	 5) Years of Experience Acquired:  <input type="text" 
        name="yearsExperience" maxlength="45" size="40" style="background- 
        color: white ;color:black"><br/>
		<P></p>
	 6) Language Known:  <input type="text" 
        name="language" maxlength="45" size="50" style="background- 
        color: white ;color:black"><br/>
		<P></p>
	 7) Computer Language:  <input type="text" 
        name="clanguage" maxlength="50" size="55" style="background- 
        color: white ;color:black"><br/>

     <p style="color:red;" >*Please only submit Resumes of the PDF file 
      type* </br> </p>
	  <P></p>
	  <P></p>
	  <P></p>

     <input type="file" name="Resume"> 

     <br/><br/>

     <input type="submit" value="Submit Resume Form" onClick="aa();">
	 <P></p>
	 <?php
			if(isset($_POST['register']))
				?>
				
	

</form>
<!-- phppppppppppppppppppppppppppppppppppppp-->


<?php
if(isset($_POST['firstname']) &&  isset($_POST['lastname']) && isset($_POST['mobile'])  && isset($_POST['yearsExperience'])
	&& isset($_POST['email']) && isset($_POST['language']) && isset($_POST['clanguage']))

{
if( $_POST )
{
    $con = mysql_connect("localhost","root","");

    if (!$con)
    {
        die('Could not connect to the database: ' . mysql_error());
    }
    mysql_select_db("res", $con);  

}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$yearsExperience = $_POST['yearsExperience'];  
$email = $_POST['email'];
$language = $_POST['language'];
$clanguage= $_POST['clanguage']; 


$fName = mysql_real_escape_string($fName);
$lastname = mysql_real_escape_string($lastname); 
$mobile = mysql_real_escape_string($mobile); 
$yearsExperience = mysql_real_escape_string($yearsExperience);
$email = mysql_real_escape_string($email);
$language = mysql_real_escape_string($language); 
$clanguage = mysql_real_escape_string($clanguage); 

//Updated insert query
$query = $query = "insert into res values (firstname, lastname, mobile, yearsExperience,email,language,clanguage)
        VALUES ('$firstname', '$lastname', '$mobile', '$yearsExperience','email','language','clanguage');";

mysql_query($query);

    echo "<h2>Thank you, your information has been stored in our Database.</h2>";

mysql_close($con); //mysql not msql
}

?>

</body>

  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
