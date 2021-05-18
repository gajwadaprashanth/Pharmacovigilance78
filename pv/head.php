<?php 

if(isset($_POST['submi'])){
$number=$_GET['num'];
for($i=0; $i<$number; $i++){
$n=$_POST["anything"][$i];
$Connection=mysqli_connect('localhost','root','','pv');
$sql="insert into `index`(name) values('$n')"; 
$execute=mysqli_query($Connection,$sql);
if($execute){
	?>
	<script>
		alert('successfully uploaded');
        window.location.href='index.php';
        </script>

<?php
}
else{?>
	<script>
		alert('Not uploaded');
        window.location.href='heading.php';
        </script>
<?php
}
}


}
?>