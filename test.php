<?php
$type = $_GET['type'];
echo $type;
$fetch ="";
if($type=="teacher"){
$fetch = "select * from teacher where name='$name' and password='$password'";
$execute = mysqli_query($connection, $fetch);
while($row=mysqli_fetch_assoc($execute)){
	$username = $row['teacher_Name'];

}
}
else{
$fetch = "select * from student where name='$name' and password='$password'";}
echo $fetch;
$execute = mysqli_query($connection, $fetch);
while($row=mysqli_fetch_assoc($execute)){
	$username = $row['student_Name'];
	
}
?>