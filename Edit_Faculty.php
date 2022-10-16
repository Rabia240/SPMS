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

    <title>Edit Faculty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    

</head>

<body>

    <div class="mx-auto" style="width: 800px">

        <h1 class="text-center">Edit Faculty</h1>
        
        <form class="form-row" method="post" action="Edit_Faculty.php">
            <div class="form-group col-sm-8">
                <label class="form-label" for="name"><b>Name</b></label>
                <input class="form-control" name="name" type="text" id="name" required>
                <div class="invalid-feedback" style="visibility: hidden;">
                    Enter your Name
                </div>
            </div>

            <div class="form-group col-sm-8">
                <label class="form-label" for="designation"><b>Designation</b></label>
               <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                     <option>Assistant Professor</option>
                     <option>Professor</option>
                     <option>Lecturer</option>
                     <option>Supervisor</option>
                </select>
                
            </div>
           
            <div class="col-auto my-3">
            <input class="btn btn-success" type="submit" name="add_btn" value="Edit" style="background-color: #24243e">
            <input class="btn btn-primary " type="reset" name="add_btn" value="Cancel" style="background-color: #24243e">
            </div>
        </form>

    </div>


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