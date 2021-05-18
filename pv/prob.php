<?php 

if(isset($_POST['submi'])){
$parent=$_GET['parent'];
$number=$_GET['no'];
for ($i=0; $i<$number; $i++){
$n=$_POST["anything"][$i];
$Connection=mysqli_connect('localhost','root','','pv');
$sql="insert into subindex(name,parent) values('$n','$parent')"; 
$execute=mysqli_query($Connection,$sql);
if($execute){
	?>
	<script>
		alert('successfully uploaded');
        window.location.href='subheading.php?success';
        </script>

<?php
}
else{?>
	<script>
		alert('Not uploaded');
        window.location.href='subheading.php?success';
        </script>
<?php
}
}


}
?>