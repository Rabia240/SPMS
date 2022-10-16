<?php
     
$showAlert = false;
$showError = false;
$exists=false;
     
if($_SERVER["REQUEST_METHOD"] == "POST") {
     
     // Include file which makes the
     // Database Connection.
     include 'config.php';
     
     $pname = $_POST["pname"];
     $groupmember= $_POST["groupmember"];
     $description=$_POST["description"]
     
               
     
     //$sql = "Select * from project where P_Name= '".$pname."' ";
     
    // $result = mysqli_query($conn, $sql);
     
   //  $num = mysqli_num_rows($result);
     
     // This sql query is use to check if
     // the username is already present
     // or not in our Database
     
                    
               // Password Hashing is used here.
               $sql = "INSERT INTO `project` ( `P_Name`,`Group Member`, `Description`) VALUES ('".$pname."','".$groupmember."',
                '".$description."')";
     
               $result = mysqli_query($conn, $sql);
     
               if ($result) {
                    $showAlert = true;
               }
          
               
// end if
     
if($num>0)
{
     $exists="Name not available";
}
}
     
//end if
     
?>
     
<!doctype html>
     
<html lang="en">

<head>
     
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content=
          "width=device-width, initial-scale=1,
          shrink-to-fit=no">
     
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">
</head>
     
<body>
     
<?php
     
     if($showAlert) {
     
          echo ' <div class="alert alert-success
               alert-dismissible fade show" role="alert">
     
               <strong>Success!</strong> Your account is
               now created and you can login.
               <button type="button" class="close"
                    data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
               </button>
          </div> ';
     }
     
     if($showError) {
     
          echo ' <div class="alert alert-danger
               alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '. $showError.'
     
     <button type="button" class="close"
               data-dismiss="alert aria-label="Close">
               <span aria-hidden="true">×</span>
     </button>
     </div> ';
}
          
     if($exists) {
          echo ' <div class="alert alert-danger
               alert-dismissible fade show" role="alert">
     
          <strong>Error!</strong> '. $exists.'
          <button type="button" class="close"
               data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
          </button>
     </div> ';
     }

?>
     
<div class="container my-4 ">
     
     <h1 class="text-center">PROJECT FORM</h1>
     <form action="project.php" method="post">
     
          <div class="form-group">
               <label for="pname">PName</label>
          <input type="text" class="form-control" id="pname"
               name="pname" >    
          </div>
          
          <div class="form-group">
               <label for="groupmember">Groupmember</label>
          <input type="text" class="form-control" id="groupmember"
               name="groupmember">     
          </div>
          <div class="form-group">
               <label for="description">Description</label>
          <input type="text" class="form-control" id="description"
               name="description">

          
                    
          </div>
          <button type="submit" class="btn btn-primary">
          Submit
          </button>
     </form>
</div>
     
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
     crossorigin="anonymous">
</script>
     
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
     integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
     crossorigin="anonymous">
</script>
     
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
     integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
     crossorigin="anonymous">
</script>
</body>
</html>