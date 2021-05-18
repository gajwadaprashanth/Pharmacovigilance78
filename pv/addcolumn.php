<?php
if(isset($_GET['no'])){
$num=$_GET['no'];
$tablename=$_GET['tablename'];
$na=$_GET['name'];
$tablesub=$_GET['tablesub'];
}
?>

<?php 
if(isset($_POST['submit'])){
for ($i=0; $i<$num; $i++){
$n=$_POST["anything"][$i];
$Connection=mysqli_connect('localhost','root','','pv');
$sql="ALTER TABLE $tablename ADD $n VARCHAR(120) NULL"; 
$execute=mysqli_query($Connection,$sql);
if($execute){
	?>
	<script>
		alert('Upadated successfully');
		window.location.href="addcolumn.php?no=<?php echo $num; ?>&tablename=<?php echo $tablename; ?>&tablesub=<?php echo $tablesub; ?>&name=<?php echo $na; ?>";
        </script>
	<?php
}
else{
	echo "error";
}
}
//SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='BOOK'
}
else{
$Connection=mysqli_connect('localhost','root','','project');
$sql="SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$tablename'"; 
$execute=mysqli_query($Connection,$sql);
$i=0;
while($row=mysqli_fetch_array($execute)){
$column_name=$row['column_name'];
?>
<form action="trail.php?no=<?php echo $num; ?>&tablename=<?php echo $tablename; ?>&tablesub=<?php echo $tablesub; ?>&name=<?php echo $na; ?>" method="POST">

<input type="hidden" name="text[]" value="<?php echo $column_name;?>">
<span class ="fieldinfo"><b><?php echo $column_name;?>:</b></span><br><input type="text" name="heading[]" ><br>
<?php
$i++;

}?>
<input type="submit" class="btn btn-outline-primary myButton" name="submit" value="Login" >
</form>
<?php
}
?>