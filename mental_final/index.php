<?php
require_once 'dbconnection.inc.php';
session_start();
if (!isset($_SESSION['adminname'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['adminname'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mind Care - Administrator Homepage</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
        <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#">
            <span>Mind Care</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="my_profile.php"> My Profile</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                    Mind Care, <br>
                    The Mental Health App
                    </h1>
                    <p>
                      Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!</p>
                    <div class="btn-box">
                      <a href="#mod" class="btn-1">
                        My Module
                      </a>
                      <a href="#contact" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/s.jpeg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                    Mind Care, <br>
                    The Mental Health App
                    </h1>
                    <p>
                      Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!</p>
                    <div class="btn-box">
                      <a href="#data" class="btn-1">
                        View Database
                      </a>
                      <a href="#contact" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/s.jpeg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                    Mind Care, <br>
                    The Mental Health App
                    </h1>
                    <p>
                     Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!</p>
                    <div class="btn-box">
                      <a href="#mod" class="btn-1">
                        My Module
                      </a>
                      <a href="#contact" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/s.jpeg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

<!-- contact section -->
  <section class="contact_section layout_padding-bottom" id="data">
    <br>
<br>
<br>
<br>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          List of Users
        </h2>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 mx-auto">
          <div class="form_container">
                                     <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
 <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">User Type</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "mental_health_app");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `User_Type` FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
<td><?php echo($row["User_Type"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this user?')?window.location.href='insertion.inc.php?action=deleteU&id=<?php echo($row["User_ID"]); ?>':true;" title='Delete User'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<br>
            <a onclick="printData();">
              Print
            </a>
          </div>
        </div>
</div>
<br>
<br>
<br>
<br>
<div class="row">
                <div class="col-md-12 col-lg-12 mx-auto">
                        <div class="heading_container heading_center">
        <h2>
          List of Media Content
        </h2>
      </div>
          <div class="form_container">
                                     <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Content ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Details</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "mental_health_app");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Content_ID`, `Name`, `URL`, `Details` FROM `self_care` WHERE `User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Content_ID"]); ?></td>
<td><a href="<?php echo($row["URL"]); ?>" title="<?php echo($row["Name"]); ?>"><?php echo($row["Name"]); ?></a></td>
<td><?php echo($row["Details"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this self care content?')?window.location.href='insertion.inc.php?action=deleteF&id=<?php echo($row["Content_ID"]); ?>':true;" title='Delete Self Care Content'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<br>
            <a onclick="printData1();">
              Print
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-bottom" id="mod">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          My Module
        </h2>
      </div>
      <div class="row">
                <div class="col-md-12 col-lg-12 mx-auto">
          <div class="form_container">
            <form action="insertion.inc.php" method="POST">
              <div>
                <input type="text" placeholder="Your Name" name="fname" required />
                <input type="hidden" value="2" name="mod" required>
              </div>
              <div>
                <input type="email" placeholder="Your Email" name="email" required />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" name="phone" required />
              </div>
              <div>
                <input type="password" placeholder="Your Password" id="pass" name="password" required />
                <br>
                 <input type="checkbox" style="width: 12px;"  onclick="showPass();"> Show Password
              </div>
              <div>
                <input type="password" id="pass1" placeholder="Confirm Your Password" name="cpassword" required />
                <br>
                 <input type="checkbox" style="width: 12px;"  onclick="showPass1();"> Show Password
              </div>                            
              <div>
              <select name="type" required>
                  <option value="" disabled selected>Kindly Select A User Type</option>
                  <option value="Administrator">Administrator</option>
                  <option value="User">User</option>
                </select>
              </div>
              <div class="btn_box ">
                <button name="regu">
                  REGISTER A USER
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
        <br>
<br>
<br>
<br>
<div class="row">
                        <div class="col-md-6 col-lg-6 mx-auto">
          <div class="form_container">
            <p class="text-light">Register a User</p>
            <form action="insertion.inc.php" method="POST" enctype="multipart/form-data">
              <div>
                <input type="text" placeholder="Your Name" name="fname" required />
                <input type="hidden" value="3" name="mod" required>
              </div>
              <div>
                <input type="email" placeholder="Your Email" name="email" required />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" name="phone" required />
              </div>
                            <div>
                <br>
                <label>Profile Picture:</label>
                <input type="file" accept=".jpg, .png, .jpeg" name="image" required />
                <br>
              </div>
              <div>
                <select name="gen" required onselect="">
                  <option value="" disabled selected>Your Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>                                
                </select>
              </div>  
              <div>
                <select name="spec" required>
                  <option value="" disabled selected>Kindly Select A Speciality</option>
                  <option value="Relationships">Relationships</option>
                  <option value="Stress">Stress</option>
                  <option value="Eating Disorders">Eating Disorders</option>
                  <option value="Self-Help">Self-Help</option>   
                  <option value="Trauma">Trauma</option>                                    
                </select>
              </div>
              <div>
                                <select name="age" required>
                  <option value="" disabled selected>Kindly Select An Age Group</option>
                  <option value="Child (6 to 15)">Child (6 to 15)</option>
                  <option value="Teen (16 to 19)">Teen (16 to 19)</option>
                  <option value="Adult (20 & Above)">Adult (20 & Above)</option>                                 
                </select>
              </div>
              <div>
                                <select name="loc" required>
                  <option value="" disabled selected>Kindly Select A Location (County)</option>
                  <option value="Nairobi">Nairobi</option>
                  <option value="Mombasa">Mombasa</option>
                  <option value="Kisumu">Kisumu</option>
                  <option value="Nakuru">Nakuru</option>                                                      
                </select>
              </div>
                            <div>
                                <select name="comm" required>
                  <option value="" disabled selected>Kindly Select A Communication Means</option>
                  <option value="Texting">Texting</option>
                  <option value="Virtual Meetings">Virtual Meetings</option>
                  <option value="Phone Calls">Phone Calls</option>
                  <option value="Physical Meetings">Physical Meetings</option>                                                      
                </select>
              </div>
              <div>
                <input type="password" placeholder="Your Password" id="pass3" name="password" required />
                <br>
                 <input type="checkbox" style="width: 12px;"  onclick="showPass3();"> Show Password
              </div>
              <div>
                <input type="password" placeholder="Confirm Your Password" id="pass4" name="cpassword" required />
                <br>
                 <input type="checkbox" style="width: 12px;"  onclick="showPass4();"> Show Password
              </div>                                        
              <div class="btn_box ">
                <button name="regu">
                  REGISTER A SPECIALIST
                </button>
              </div>
            </form>
          </div>
        </div>
                        <div class="col-md-6 col-lg-6 mx-auto">
          <div class="form_container">
            <form action="insertion.inc.php" method="POST">
              <div>
                <input type="text" placeholder="Name" name="dname" required />
              </div>
              <div>
                <input type="url" placeholder="Link/URL" name="dir" required />
              </div>
                            <div>
                <input type="text" required class="message-box" placeholder="Content Details" name="det" />
              </div>
              <div class="btn_box ">
                <button name="addselfcare">
                  ADD SELF-CARE CONTENT
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location: Nariobi, Kenya.
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +254 712 345678
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                 Email: mindcare@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="#">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="logout.php">
                <img src="images/nav-bullet.png" alt="">
                Logout 
              </a>
              <a class="" href="#contact">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

<script type="text/javascript">
        function showPass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        function showPass1() {
  var x = document.getElementById("pass1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        function showPass3() {
  var x = document.getElementById("pass3");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        function showPass4() {
  var x = document.getElementById("pass4");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved.
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>