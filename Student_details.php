<?php
    $servername = "localhost";
$username = "root";
$password ="";
$database = "demo";

$connection = mysqli_connect($servername, $username, $password, $database);

if ($connection) {
    // code...
   // echo "True";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Student Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="dashboard.css"> 
    

</head>

<body>

   <h1 class="text-center">Student Information</h1>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Admin_dashboard.php">Dashboard</a>
  <a href="index.html">Home</a>
  <a href="Faculty_details.php">Faculty</a>
  <a href="#">Student</a>
  <a href="#">Batches</a>
  <a href="#">Courses</a>
  <a href="#">Sessions</a>
  <a href="#">Projects</a>
  <a href="login.php">Logout</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidenav").style.display = "none";
}
</script>
   
<label class="form-label" for="add" style="margin-left:180px; margin-bottom: 20px;"><b>Add Faculty!</b></label>

<a href="Add_Faculty.php"><td><input class="btn btn-primary w-10" type="button" name="add_btn" value="ADD STUDENT" style="background-color: #24243e"></td></a>

  
<table class="table" style="margin-left: 200px; border-style: solid; width: 70%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Batch ID</th>
      <th scope="col">Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>


    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <a href="Edit_Faculty.php"><td><input class="btn btn-primary w-10" type="button" name="edit_btn" value="EDIT" style="background-color: #24243e"></td></a>

       <a href="#"><td><input class="btn btn-primary w-0" type="button" name="dlt_btn" value="DELETE" style="background-color: #24243e; width:35%"></td></a>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
       <a href="Edit_Faculty.php"><td><input class="btn btn-primary w-10" type="button" name="edit_btn" value="EDIT" style="background-color: #24243e"></td></a>

        <a href="#"><td><input class="btn btn-primary w-0" type="button" name="dlt_btn" value="DELETE" style="background-color: #24243e; width:35%"></td></a>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
       <a href="Edit_Faculty.php"><td><input class="btn btn-primary w-10" type="button" name="edit_btn" value="EDIT" style="background-color: #24243e"></td></a>

        <a href="#"><td><input class="btn btn-primary w-0" type="button" name="dlt_btn" value="DELETE" style="background-color: #24243e; width:35%"></td></a>
    </tr>
    <tr>
      
  </tbody>
</table>

</body>

</html>

<?php
if(isset($_POST['login_btn'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

$insert = "insert into `login`(`Name`, `Password`) values ('".$name."', '".$password."')";

echo "Query <br>".$insert;
echo "hello";

$connection = mysqli_connect("localhost", "root", "", "demo");

$execute = mysqli_query($connection, $insert);
}
?>