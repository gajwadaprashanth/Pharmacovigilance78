<?php  
//action.php
$connect = mysqli_connect('localhost','root','','pv');

$input = filter_input_array(INPUT_POST);

$first_name = mysqli_real_escape_string($connect, $input["name"]);
$last_name = mysqli_real_escape_string($connect, $input["contact"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE prashanth SET name = '".$first_name."', contact = '".$last_name."' WHERE id = '1' ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM prashanth 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
