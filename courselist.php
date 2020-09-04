
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Course List</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/courselist.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css">-->
<!--Bootsrap js files-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    

<?php
    session_start();
    if(!isset($_SESSION['collegeid']))
    {
        if(!isset($_SESSION['facultyid']))
        {
            header('Location: facultylogin.php');
        }
        else 
        {
            header('Location: '.$loginurl);
        }
        
    }
    /*else if(!isset($_SESSION['facultyid']))
    {
        header('Location: facultylogin.php');
    }*/
    
    require_once 'config.php';
?>



</head>
<body>


	
	<!--<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li class="current_page_item"><a href="#">Courses</a></li>
				<li><a href="#">Q/A</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				
                                <li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		
         
	</div>
        -->
        
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
          <a class="navbar-brand" href="#">
              <img src="images/ddu_logo.png" width="30" height="30" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto nav nav-tabs">
              <li class="nav-item active">
                <a class="nav-link" href="#">Courses <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>-->
              <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          
          </div>
        </nav>
        
        <div class="container">
            <div class="jumbotron">
                <div id="banner">
        
                <!--<form action="insertdata.php" method="post" enctype="multipart/form-data" >
                      <h3>Add New Course</h3><br>
                  Course Name:
                  <input type="text" name="coursename"> <br>
                  Course Description:
                  <textarea name="coursedescription"></textarea>
                  <!--Faculty ID:
                  <input type="text" name="facultyid"> <br>
                  <button type="submit" name="addcourse">Add</button>
                  </form>-->
                  
            <form action="insertdata.php" method="post" enctype="multipart/form-data">
                <h3>Add New Course</h3><br>
                <div class="form-group">
                  <label for="exampleInputEmail1">Course Name</label>
                  <input type="text" class="form-control"  aria-describedby="emailHelp" name="coursename" required="">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Course Description</label>
                  <div class="input-group">
                        
                        <textarea class="form-control" aria-label="With textarea" name="coursedescription" required=""></textarea>
                        </div>
                </div>
                
                <button type="submit" class="btn btn-primary" name="addcourse">Add</button>
        </form>
      </div>
     
            </div>      
        </div>        
        
    <!--<div id="banner">
        
        <form action="insertdata.php" method="post" enctype="multipart/form-data" >
              <h3>Add New Course</h3><br>
          Course Name:
          <input type="text" name="coursename"> <br>
          Course Description:
          <textarea name="coursedescription"></textarea>
         <button type="submit" name="addcourse">Add</button>
          </form>
      </div>-->
        
   
	
	<div id="portfolio-wrapper">
		<div id="portfolio" class="container">
			
                    
                        <!--<div id="column1">
				<div class="title">
					<h2 style="color:#03A9F4">C</h2>
				</div>
				
				<p>C is a general-purpose, procedural computer programming language supporting structured programming language.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
                        <div id="column2">
				<div class="title">
					<h2 style="color:#03A9F4">JAVA</h2>
				</div>
				
				<p>Java is a popular programming language.It is easy to learn and simple to use.It is open-source and free</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
			<div id="column3">
				<div class="title">
					<h2 style="color:#03A9F4">PYTHON</h2>
				</div>
				
				<p>Python is an interpreted, high-level, general-purpose programming language.Python is dynamically typed and garbage-collected.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> 
                        </div>-->
			
                        <!--<div id="column1">
                            <?php
                                /*try 
                                {
                                    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                                    $query=$dbhandler->query('select * from Course');
                                    while($r=$query->fetch())
                                    {   ?>
                                        <div class="title">
                                        <h2 style="color:#03A9F4">
                                            <?php
                                            //echo specific attributes
                                            echo $r['CName'], '<br/>';
                                            $_SESSION['cid']=$r['CourseID'];
                                            $_SESSION['cname']=$r['CName'];
                                            
                                    }
                                }
                                catch(PDOException $e)
                                {
                                                echo $e->getMessage();
                                                die();
                                }?>
                                    </h2>
				</div>
				
				<p>
                                  <?php
                                try 
                                {
                                    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                                    $query=$dbhandler->query('select * from Course');
                                                while($r=$query->fetch()){
                                                        //echo specific attributes
                                                        echo $r['CDescription'], '<br/>';
                                                       
                                                }
                                        }
                                        catch(PDOException $e){
                                                echo $e->getMessage();
                                                die();
                                        }
                                ?>  
                                </p>
                            <a href="document_view.php" class="icon icon-arrow-right button">Read More</a>
                            <a href="document_upload.php" class="icon icon-arrow-right button">Upload Document</a>
                        
                            <?php
                                /*if(!isset($_SESSION['collegeid']))
                                {
                                 echo "<a href='document_upload.php' class='icon icon-arrow-right button'>Upload Document</a>";   
                                
                            }*/
                            /*if(!isset($_SESSION['collegeid']))
                            {
                                 echo "<a href='document_upload.php' class='icon icon-arrow-right button'>Upload Document</a>";   
                                
                            }
                            if(!isset($_SESSION['facultyid']))
                            {
                                 echo "<a href='document_upload.php' class='icon icon-arrow-right button'>Read More</a>";   
                                
                            }*/
                            
                            ?>
                        </div>-->

    <div class="row row-cols-1 row-cols-md-3">
    
     <?php
            try 
            {
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $query=$dbhandler->query('select * from Course');
                while($r=$query->fetch())
                {   ?>
                    
                          <div class="col mb-4" style="box-shadow: 5px 2px 5px #888888;">
                             <div class="card h-100">
                            <div class="card-body">
                              <h5 class="card-title">
                                    <?php
                                //echo specific attributes
                                    echo $r['CName'], '<br/>';
                                    $_SESSION['cid']=$r['CourseID'];
                                    $_SESSION['cname']=$r['CName'];
                                    ?>
                                </h5>  
                                <?php echo $r['CDescription'], '<br/>'; ?><br><br>  
                                <a href="document_upload.php" class="btn btn-primary">Upload Document</a>
                            </div>
                         </div>
                    </div>
             
        <?php   }
            }
            catch(PDOException $e)
                {
                    echo $e->getMessage();
                    die();
                }
    ?>  
    
   </div>     
    <!--<div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
    </div>--> 
                        

<!--<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. Design by KRISHNA SINROJA & VIDHI MAHERIYA</p>
</div>-->
    

<!--<footer class="" style="padding-right:">

  
  <div class="navbar-dark bg-primary">
  <div class="footer-copyright text-center py-3">
      <div class="nav-item"><p style="margin-left: 350px;">&copy; Untitled. All rights reserved. Design by KRISHNA SINROJA & VIDHI MAHERIYA</p></div>
  </div>
  </div>
  

</footer>-->


</body>
</html>
<div  style="width: 1200px; padding-left: 300px;">


</div>