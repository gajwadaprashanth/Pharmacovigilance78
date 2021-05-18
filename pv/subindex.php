<?php
$sno="";
if(isset($_GET['name'])){
	$na=$_GET['name'];
	$table=$_GET['table'];
	
}
if(isset($_GET['sr'])){
	$sno=$_GET['sr'];
}
?>
 
<?php
echo $_SERVER['HTTP_REFERER'];
if(isset($_POST['submit'])){
$description=$_POST['description'];
$parent=$_POST['parent'];
$Connection=mysqli_connect('localhost','root','','pv');
$query="update `$table` set description='$description' where name='$parent'";
$Execute=mysqli_query($Connection,$query);
if($Execute){?>
     <script>
		alert('Upadated successfully');
        </script>
<?php
}
else{?>
     <script>
		alert('Please Try Again');
        </script>
<?php
}
}
else{
$Connection=mysqli_connect('localhost','root','','pv');
$query="select * from `$table` where name='$na'";
$Execute=mysqli_query($Connection,$query);
while($row=mysqli_fetch_array($Execute)){
$description=$row['description'];
}

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
   
     
    <script src="jquery.tabledit.min.js"></script>
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
    padding-top: 30px;
	
}
.set-flexi a {
    margin: 5px;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 5px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  color:black;
  background-color:#ffffff;
  text-align: left;
  font-size: 20px;
  text-transform: capitalize;
}

#customers tr:nth-child(even){
	background-color: #f2f2f2;
	}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
 font-weight: bold;
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
  <form action="subheading.php?name=<?php echo $na;?>" method = "POST" >
 
    <button type="submit" class="btn  btn-success mt-2"  style = "margin-bottom:30px;" name="create_new_record">Description</button>
     

     <a href="createtable.php?name=<?php echo $na;?>&tablesub=<?php echo $table;?>" class="btn btn-danger btn-inline-block mb-4" role="button">Create table</a>
    
    
     
     
    <button type="submit" class="btn btn-primary mt-2"  style = "margin-bottom:30px;" name="upload_file">Create subheading</button>

     
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
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
						<h3><?php echo $sno.'.'.$na;?></h3>
                         <form action="subindex.php?name=<?php echo $na;?>&table=<?php echo $table;?>" method="POST">
                            <input  type="hidden" name="parent" value='<?php echo $na; ?>' >
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Description</span>
                                 </div>
                                 <textarea class="form-control bg-black-50" name="description" style="height:120px;" aria-label="With textarea" value='$description' ><?php echo "$description"; ?></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Save" >
                         </form>
						 <table id="customers" class="table-hover">
						 <?php 
						 $Connection=mysqli_connect('localhost','root','','pv');
                         $query="SELECT tablename from `$table` where name='$na'";
                         $tabledata=mysqli_query($Connection,$query);
						 
						 $datarows=mysqli_fetch_array($tabledata,MYSQLI_ASSOC);
	                     $tablename=$datarows["tablename"];
						 if(!empty($tablename)){
						 $Connection=mysqli_connect('localhost','root','','pv');
                         $Query="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$tablename'";
                         $executed=mysqli_query($Connection,$Query);
						 $a=array();
						 ?>
						
						 <tr><?php
						 
						 while($row=mysqli_fetch_array($executed)){
							 $a[]=$row['COLUMN_NAME'];
					        //$column=$row['COLUMN_NAME'];
?>                          
						    
							    <th scope="col col-inline-block"><?php echo $row['COLUMN_NAME']; ?></th>
								
							
						<?php } ?></tr>
						 <?php 
						   $Connection=mysqli_connect('localhost','root','','pv');
                         $Query="SELECT * FROM $tablename";
                         $execute=mysqli_query($Connection,$Query);
						 $b=count($a);
						 ?>
						 <tr><?php
                         while($row=mysqli_fetch_array($execute)){
							 for($i=0;$i<$b;$i++){
					        $rows=$row[$a[$i]];
						  
						 ?>
							
							    <td scope="row"><?php echo $rows; ?></td>
								
							
						 <?php  }?></tr><?php } ?>
						 
						 </table>
						  <a href="inserttable.php?name=<?php echo $na;?>&table=<?php echo $table;?>" role="button" class="btn btn-primary">Insert Rows</a>
						  <a href="edittable.php?name=<?php echo $na;?>&table=<?php echo $table;?>" role="button" class="btn btn-primary">Edit/Delete</a>
						 <?php }else{} ?>
						
						 <h3 style="margin-bottom:20px;">Sub Headings</h3>
						 
                        <?php
						//$r=$_GET['name'];
			$Connection=mysqli_connect('localhost','root','','pv');
			$query="select * from subindex where parent='$na'";
			$Execute=mysqli_query($Connection,$query);
			$sr=0;
			$n=$sno;
			while($row=mysqli_fetch_array($Execute)){
			$postid=$row["id"];
			$name=$row["name"];
			$subtable="subindex";
			$sr++;
			$n=$n+0.1;
			?>
                             
							 <?php if($sr%2==0){ ?> 
                            <a  href="subindex.php?name=<?php echo $name;?>&table=<?php echo $subtable;?>&sr=<?php echo $n;?>" class="btn btn-info btn-ll" >
                               <?php echo $n.'.'.$name;?>
							   
                            </a>
							<a href="subheadingedit.php?id=<?php echo $postid;?>"> <img src="ee.png" height="25"></a>                                                          
							 <a href="subheadingdelete.php?id=<?php echo $postid;?>"><img src="dd.png"  height="25"></i></a>
                             <?php }
                             else{
							 ?> 
                            <a  href="subindex.php?name=<?php echo $name;?>&table=<?php echo $subtable;?>&sr=<?php echo $n;?>" class="btn btn-success btn-ll" >
                               <?php echo $n.'.'.$name;?>
							  
                            </a>
							<a href="subheadingedit.php?id=<?php echo $postid;?>"> <img src="ee.png" height="25"></a>                                                          
							 <a href="subheadingdelete.php?id=<?php echo $postid;?>"><img src="dd.png"  height="25"></i></a>
							 <?php } ?>
                        
                        <!-- End Slider 01 -->
                        
			<?php } ?>    
                    </ul>
                </div>
            </div>
        </div>
	</div>
</div>
           
       </div>
</body>
</html>
