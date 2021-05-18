<?php
if(isset($_GET['name'])){
$na=$_GET['name'];
$_SESSION['parent']=$na;
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
  <link rel="stylesheet" href="css/style.css">
  <title>Bootstrap Theme</title>
</head>
<style>
.home-sec {
    padding-top: 10px;
    padding-bottom: 60px;
    background: url(../img/header.jpg) no-repeat center center;
    padding: 0;
    -webkit-background-size: cover;
    background-size: cover;
    color: #fff;
    background-attachment: fixed;
}
body {
    font-family: "Open Sans",sans-serif;
    line-height: 30px;
    font-size: 14px;
}
.home-sec .overlay {
    background: rgba(38, 57, 88, 0.89);
    min-height: 500px;
}
.set-flexi {
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0);
    -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0);
    -o-box-shadow: 0 1px 4px rgba(0, 0, 0, 0);
    box-shadow: 0px 1px 4px rgba(0,0,0,0);
    background-color: transparent;
    border: 0px solid #000;
    padding-top: 120px;
}
.set-flexi a {
    margin: 5px;
}
input[type="text"]{
  margin:5px;
  line-height:1.2;
  width:30%;
  align:center;
  display: inline-block;
}

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark " style = "background-color:rgb(2, 30, 66)">
  <a class="navbar-brand" href="mainpage.php"><img src="kramah.png" width="200" height="30" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left:30%">
    <ul class="navbar-nav mr-auto" style = "color:white ;font-size: 12px;font-weight: 700;letter-spacing: 1px; text-transform:uppercase;" >
      <li class="nav-item" style = "color:white">
        <a class="nav-link" href="mainpage.php" style = "color:white"><span class="nothing">Home</span> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" >
      <a class="nav-link" href="http://193.168.195.147/Graphs/Bargraphs.php" style = "color:white"><span class="nothing">Dashboard</span> <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
      <a class="nav-link" href="#">Services <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item" style = "color:white">
      <a class="nav-link" href="login_page.php" style = "color:white"><span class="nothing">Sign Out</span> <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline" action="mainpage.php" method="POST">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="keyword">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="key_word">Search</button>
  </form>
  </div>
  </div>
</nav>
<div class="sticky-top"> 

<div style = "background:#E9E9E9; height:66.6px; margin-bottom:20px;">
<div class="row">
<div  class = "col-lg-4 col-md-12" style="font-size: 20px; font-weight: 700;  color: #005E5A; margin-top:10px">
<center>
<i class="fa fa-circle-o-notch" style = "margin:0px 8px;"></i>
WELCOME TO PV REPORT PORTAL 
<i class="fa fa-circle-o-notch" style = "margin:0px 8px;"></i>
</center>
</div>
<div class = "col-lg-8 col-md-12" style = "margin-top:10px">
  <div  style=" display:inline-block ;" >
 <div class = "row">
 <div class = "col-lg-2">
   
     </div>
<div class = "col-lg-10" style = "float:right;">
  <form action="subheading.php" method = "POST" >
 
    <button type="submit" class="btn  btn-success"  style = "margin-bottom:30px;" name="create_new_record">Description</button>
     

     
    <button type="submit" class="btn btn-danger"  style = "margin-bottom:30px;" name="download">Create table</button>
    
     
     
    <button type="submit" class="btn btn-primary"  style = "margin-bottom:30px;" name="upload_file">Create subheading</button>

     
     <input type="submit" style="background:transparent; border:none; color:transparent;">

    </form>
    </div>
     </div>
  </div>
  </div>
  </div>
</div>
</div>


 <div class="home-sec" id="home" >
    <div class="overlay">
         <div class="container">
            <div class="row text-center " >
                <div class="col-lg-12  col-md-12 col-sm-12">
                    <div class="flexslider set-flexi" id="main-section" >
					
                    <form action="heading.php" method="POST">
                    <label><h4>How Many headings Do You Want To Add:</h4></label><br>
                    <input type="text" class = "form-control" placeholder = "Add Headings" name="column" value="">
                    <input type="submit" class="btn btn-success" name="submit" value="Add Headings">
                   </form>
				   <?php
if(isset($_POST['submit'])){

$num=$_POST['column'];
//$a=array('Column one', 'Column two', 'Column three', 'Column four', 'Column five');?>
<form action="head.php?num=<?php echo $num; ?>" method="POST">
<?php
for ($i=0; $i<$num; $i++)
{   echo "Heading ".($i+1);
	?>
	<input type="text" class = "form-control" name="anything[]" value=""><br>
	<?php
}
?>
<input type="submit" name="submi" value="Add Heading">
</form>
<?php

}
?>
                </div>
            </div>
        </div>
	</div>
</div>
           
       </div>
</body>
</html>



