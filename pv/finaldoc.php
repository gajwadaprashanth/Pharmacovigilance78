<?php
  $Connection=mysqli_connect('localhost','root','','pv');
  function checksubindex($index,$j)
  {
    global $Connection;
    $query= "select * from subindex where parent ='$index'";
    $k = 1;
      for($i=1;$i<=200;$i++){
        $execute = mysqli_query($Connection,$query);
      while($row = mysqli_fetch_array($execute)){
          $postid=$row["id"];
          if($postid ==$i)
          {
          echo "<b><h5>".$j.".".$k." ".$row['name']."</b></h5>";
          echo "<br>";
          if($row['description'])
          {
          echo "Description :<br>";
          echo $row['description'];
          }
          echo "<br>";
    
          if($row['tablename'])
          {
          echo "Tablename :<br>";
          $str_arr = explode("::",$row['tablename']);
          
          for($x = 0; $x<count($str_arr);$x++)
          {
            echo $str_arr[$x];  
            $Query="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME ='$str_arr[$x]' ";
            // echo $query;
            $Execute = mysqli_query($Connection,$Query);
            echo "<table><tr>";$a=array();
            while($result=mysqli_fetch_array($Execute)){
              echo "<th>".$result['COLUMN_NAME']."</th>";
              $a[]=$result['COLUMN_NAME'];
            }
            echo "</tr>";
						   
            $Query2="SELECT * FROM ".$str_arr[$x];
            $execute2=mysqli_query($Connection,$Query2);
            $b=count($a);
            echo $b;
						echo "<tr>";
            while($row1=mysqli_fetch_array($execute2)){
							 for($w=0;$w<$b;$w++){
					        $rows=$row1[$a[$w]];
							
							    echo "<td>".$rows."</td>";
               }
							
             echo "</tr>";
             } 
						 
						// echo "</table>";


          }
          echo "<br>";
          }
          echo "<br>";
          //checksubindex($row['name']);
          $k++;
          break;
          } 
      }
    }
    echo "<hr>";
  }

  
  $query = "select * from `index`";
  $k=1;
  for($i=1;$i<=200;$i++){
    $execute = mysqli_query($Connection,$query);
  while($row = mysqli_fetch_array($execute)){
      $postid=$row["id"];
      if($postid ==$i)
      {
      echo "<b><h3>".$i." ".$row['name']."</h3></b>";
      echo "<br><br>";
      if($row['description'])
      {
      echo "Description :<br>";
      echo $row['description'];
      }
      echo "<br>";

      if($row['tablename'])
      {
      echo "Tablename :<br>";
      echo $row['tablename'];
      }
      echo "<br>";
      checksubindex($row['name'],$k);
      $k++;
      break;
      } 
  }
}
?>