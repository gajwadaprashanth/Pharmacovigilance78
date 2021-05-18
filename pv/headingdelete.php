<?php
$id=$_GET['id'];
$Connection=mysqli_connect('localhost','root','','pv');
$query="delete from `index` where id='$id'";
$Execute=mysqli_query($Connection,$query);
if($Execute){
?>
<script>
		alert('successfully Deleted');
        window.location.href='index.php';
</script>
<?php
}
else{
?>
<script>
		alert('Deleted unsuccessfully');
        window.location.href='index.php';
</script>
<?php
}
?>