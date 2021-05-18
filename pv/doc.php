<?php
$Connection=mysqli_connect('localhost','root','','pv');
global $Connection;
 $query = "select * from `index`";
 $execute = mysqli_query($Connection,$query);
 while($row = mysqli_fetch_array($execute)){
	 $indexname[]=$row['name'];
	 $description[]=$row['description'];
	 $table[]=$row['tablename'];
 }
 $num=count($indexname);
 for($i=0;$i<$num;$i++){
	 if($indexname[$i]){
	    echo $indexname[$i]."<br>";
		
	 }
	 if($description[$i]){
		 echo "Description :<br>";
		 echo $description[$i]."<br>";
		 echo "<br><br>";
	 }
	 if($table[$i]){
		 echo $table[$i]."<br>";
	 }
	 if($indexname[$i]){
		 $Query = "select * from `subindex` where parent='$indexname[$i]'"; 
		  $executed = mysqli_query($Connection,$Query);
		  
		  if(mysqli_num_rows($executed)>0){ 
           while($rows = mysqli_fetch_array($executed)){
			   if($rows['name']){
			   echo $rows['name']."<br>";
			   }
			   if($rows['description']){
				   echo $rows['description']."<br>";
			   }
			   if($rows['tablename']){
				   echo "Tablename :<br>";
				   echo $rows['tablename']."<br>";
				   
          $str_arr = explode("::",$rows ['tablename']);
          
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
            while($rowss=mysqli_fetch_array($execute2)){
							 for($w=0;$w<$b;$w++){
					        $rows=$rowss[$a[$w]];
							
							    echo "<td>".$rows."</td>";
               }
							
             echo "</tr>";
             } 
						 
						// echo "</table>";


          }
          echo "<br>";
			   }
		   }
		   
		  }
	}
	 echo "<hr>";
 }
?>