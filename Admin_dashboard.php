<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dashboard.css"> 
<link rel="stylesheet" href="calendar.css"> 
<title>Admin Dashboard</title>

<style>
  .flex-container {
  display: flex;
  background-color: snow;
  width: 50%;
  margin-left: 200px;
  border-style: solid;
}

.flex-container > div {
 /* background-color: #f1f1f1;*/
  margin: 10px;
  padding: 20px;
  font-size: 20px;
}

</style>

</head>
<body>
   <h1 style="text-align: center;">Admin Dashboard</h1>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Admin_dashboard.php">Dashboard</a>
  <a href="index.html">Home</a>
  <a href="Faculty_details.php">Faculty</a>
  <a href="Student_details.php">Student</a>
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
<div id="wrapper">
   
   <div class="flex-container" id="inner-1">
  <div>HEC Policy on COVID-19
  <p><a href="#">Click here to review</a></p>
  </div>
</div>

<div id="wrapper" style="margin-top: 15px;">
   
   <div class="flex-container" id="inner-2">
  <div>Course Overview
  
  <div class="card-deck">
  <div class="card">
    <img src="images/AI.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <a href="#">    <h5 class="card-title">Artificial Intelligence</h5> </a>
         <progress id="file" value="32" max="100" > 32% </progress>
       <br>
      <p for="file">32% complete</p>

</div>
    </div>
  </div>



  <div class="card-deck">
  <div class="card">
    <img src="images/CN.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <a href="#">    <h5 class="card-title">Computer Networks</h5> </a>
         <progress id="file" value="22" max="100"> 22% </progress>
       <br>
      <label for="file">22% complete</label>

</div>
    </div>
  </div>











  </div>
</div>



<div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">April</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2022</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
       
        <div class="month-list"></div>
    </div>
    <script src="calendar.js"></script>


<div id="wrapper"  style="margin-top: 15px;">
   
   <div class="flex-container" id="inner-3" style="height: 300px;">
  <div>Notification
  <p><a href="#"></a></p>
  </div>
</div>

</body>
</html> 
