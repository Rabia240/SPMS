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

    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="login">

        <h1 class="text-center">Login Form To SPMS!</h1>
        
        <form class="needs-validation" method="post" action="login.php">
            <div>
                <label class="form-label" for="Username"><b>Username</b></label>
                <input class="form-control" name="name" type="Username" id="Username" required>
                <!--<span class="error">* <?php echo $nameErr; ?> </span>-->  
                <div class="invalid-feedback" style="visibility: hidden;">
                    Please enter your Username!
                </div>
            </div>
            <div >
                <label class="form-label" for="password"><b>Password</b></label>
                <input class="form-control"  name="password" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password!
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>
            <input class="btn btn-success w-100" type="submit" name="login_btn" value="LOG IN" style="background-color: #24243e">
        </form>

    </div>


</body>

</html>

<?php
/*$nameErr = "";
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    if (emptyempty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  }
    }
if (isset ($_POST['submit'])) {  
    echo "Submit button is clicked.";  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        echo "Data is sent using POST method ";  
    }  
} */

if ($_SERVER['REQUEST_METHOD']=='POST'){
$name = $_POST['name'];
$password = $_POST['password'];
//require_once('connection.php');

$sql= "SELECT * FROM login ";
echo $sql;

$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($result)){
    if ($row['Name']==$name && $row['Password']==$password) {
        // code...
        header('location:Admin_dashboard.php');
    }
}
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}
else{
echo 'failure';
}
}

?>