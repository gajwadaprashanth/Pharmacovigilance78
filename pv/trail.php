<?php
if(isset($_GET['no'])){
$num=$_GET['no'];
$tablename=$_GET['tablename'];
$na=$_GET['name'];
$tablesub=$_GET['tablesub'];
}
?>

<?php
session_start();
if(isset($_POST['submit'])){
	$n = "";$text = "";
for($i=0; $i<=$num; $i++){
	
	if($i==$num){
		$n=$n."'".$_POST["heading"][$i]."'";
	$text=$text.$_POST["text"][$i];
	}else{
		$n=$n."'".$_POST["heading"][$i]."',";
		$text=$text.$_POST["text"][$i].",";
		
	}
	

}
echo $n;
echo $text;
$Connection=mysqli_connect('localhost','root','','pv');
$sql="insert into $tablename($text) values($n)"; 
echo $sql;
$execute=mysqli_query($Connection,$sql);
if($execute)
{?>
	<script>
		alert('Upadated successfully');
		window.location.href="subindex.php?name=<?php echo $na; ?>&table=<?php echo $tablesub; ?>";
    </script>
	
	<?Php
}
else{?>
	<script>
		alert('Upadated successfully');
</script>
<?php
}


}
?>