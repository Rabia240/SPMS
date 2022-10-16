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

    <title>Add Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    

</head>

<body>

    <div class="mx-auto" style="width: 800px">

        <h1 class="text-center">Add Student</h1>
        
        <form class="form-row" method="post" action="test.php">
            <div class="form-group col-sm-8">
                <label class="form-label" for="name"><b>Name</b></label>
                <input class="form-control" name="name" type="text" id="name" required>
                <div class="invalid-feedback" style="visibility: hidden;">
                    Enter your Name
                </div>
            </div>

            <div class="form-group col-sm-8">
                <label class="form-label" for="id"><b>Batch ID</b></label>
                <input class="form-control" name="batchid" type="text" id="batchid" required>
                <div class="invalid-feedback" style="visibility: hidden;">
                    Enter your Batch ID
                </div>
            </div>




             <div class="form-group col-sm-8">
                <label class="form-label" for="course applied"><b>Course Applied For</b></label>
               <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                     <option>Computer Science</option>
                     <option>Software Engineering</option>
                     <option>Information Technology</option>

                </select>
            </div>


            <div class="form-group col-sm-8">
                <label class="form-label" for="designation"><b>Result</b></label>
               <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                     <option>Pass</option>
                     <option>Fail</option>
                </select>
            </div>
           
            <div class="col-auto my-3">
            <input class="btn btn-success" type="submit" name="add_btn" value="Add" style="background-color: #24243e">
            <input class="btn btn-primary " type="submit" name="add_btn" value="Cancel" style="background-color: #24243e">
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