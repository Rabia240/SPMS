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

    <title>Add Faculty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    

</head>

<body>

    <div class="mx-auto" style="width: 800px">

        <h1 class="text-center">Add Faculty</h1>
        
        <form class="form-row" method="post" action="Add_Faculty.php">
            <div class="form-group col-sm-8">
                <label class="form-label" for="name"><b>Name</b></label>
                <input class="form-control" name="name" type="text" id="name" required>
                <div class="invalid-feedback" style="visibility: hidden;">
                    Enter your Name
                </div>
            </div>

             <div class="form-group col-sm-8">
                <label class="form-label" for="email"><b>Email</b></label>
                <input class="form-control" name="email" type="text" id="email" required>
                <div class="invalid-feedback" style="visibility: hidden;">
                    Enter your Email
                </div>
            </div>


              <div class="form-group col-sm-8">
                <label class="form-label" for="contact"><b>Contact Number</b></label>
                <input class="form-control" name="contact" type="text" id="contact" required>
                <div class="invalid-feedback" style="visibility: hidden;">
                    Enter your Contact
                </div>
            </div>



              <div class="form-group col-sm-8">
                <label class="form-label" for="gender" name="gender"><b>Gender</b></label><br>
            <input type="radio" id="M" name="male" value="Male">
             <label for="male">Male</label><br>

             <input type="radio" id="F" name="female" value="Female">
             <label for="female">Female</label><br>
               </div>

               <div class="form-group col-sm-8">
                <label class="form-label" for="department"><b>Department</b></label>
               <select name="department" id="inputState" class="form-control">
                <option >Choose...</option>
                     <option value="CS">Computer Science</option>
                     <option value="SE">Software Engineering</option>
                     <option value="IT">Information Technology</option>
                     
                </select>



            <div class="form-group col-sm-8">
                <label class="form-label" for="designation"><b>Designation</b></label>
               <select name="designation" id="inputState" class="form-control">
                <option >Choose...</option>
                     <option value="Assistant Professor">Assistant Professor</option>
                     <option value="Professor">Professor</option>
                     <option value="Lecturer">Lecturer</option>
                     <option value="Supervisor">Supervisor</option>
                </select>
                
            </div>
           
            <div class="col-auto my-3">
            <input class="btn btn-success" type="submit" name="add_btn" value="Add" style="background-color: #24243e">
            <input class="btn btn-primary " type="reset" name="cancel_btn" value="Cancel" style="background-color: #24243e">
            </div>
        </form>

    </div>


</body>

</html>

<?php
$gender = "";
if(isset($_POST['add_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $male = $_POST['male'];
    $female = $_POST['female'];
    if ($male!="") {
        // code...
        $gender = "Male";
    }
    else{
        $gender= "female";
    }
    $department = $_POST['department'];
    $designation = $_POST['designation'];
 

$insert = "insert into `faculty`(`T_Name`,`T_Email`,`T_Contact`,`T_Gender`, `T_Department`, `T_Designation`) 
values ('".$name."','".$email."', '".$contact."', '".$gender."', '".$department."', '".$designation."')";

echo "Query <br>".$insert;
echo "hello";

$connection = mysqli_connect("localhost", "root", "", "demo");

$execute = mysqli_query($connection, $insert);
}
?>