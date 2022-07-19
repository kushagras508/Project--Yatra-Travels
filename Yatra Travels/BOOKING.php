<?php
require_once "res2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="bookin.css" type="text/css" />
  <title>BOOKING</title>
</head>

<body onload="checkCookie()">
  <script src="javascript.js"></script>
  <!-- Header and Nav -->
  <header>
    <nav>
      <div class="main">
        <ul class="main-list">
          <li class="active main-list-item"><a href="index.html">HOME</a></li>
          <li class="main-list-item"><a href="DOMESTIC_TOURS.html">DOMESTIC TOURS</a></li>
          <li class="main-list-item"><a href="PRICE.html">PRICING</a></li>
          <li class="main-list-item"><a href="BOOKING.php">BOOKING</a></li>
          <li class="main-list-item"><a href="ABOUTUS.html">ABOUT US</a></li>
          <li class="main-list-item"><a href="contact_us.xhtml">CONTACT US</a></li>
          </li>
        </ul>
      </div>
    </nav>
    <!-- // Header and Nav -->

    <!-- Title heading -->
    <div class="title">
      <span class="heading" onmouseover="style.color='yellow'" onmouseout="style.color='red'">BOOKING</span>
    </div>
  </header>
  <!-- // Title heading -->

  <!-- Restaurants -->
  <div class="page-wrapper">
    <?php
    // (A) PROCESS RESERVATION
    if (isset($_POST['submit'])) {
      $res_name = $_POST['res_name'];
      $res_email = $_POST['res_email'];
      $res_tel = $_POST['res_tel'];
      $res_notes = $_POST['res_notes'];
      $res_destination = $_POST['res_destination'];
      $res_date = $_POST['res_date'];
      $res_slot = $_POST['res_slot'];

      $sql = "INSERT INTO reservations (res_name,res_email,res_tel,res_notes,res_destination,res_date,res_slot) VALUES(?,?,?,?,?,?,?) ";
      $stmtinsert = $db->prepare($sql);
      $result = $stmtinsert->execute([$res_name, $res_email, $res_tel, $res_notes, $res_destination, $res_date, $res_slot]);

      if ($result) {
        echo "<div class='ok'>Reservation saved.</div>";
      } else {
        echo "<div class='err'>error</div>";
      }
    }
    ?>

    <!-- (B) RESERVATION FORM -->
    <center>
      <h1>FILL YOUR BOOKING DETAILS</h1>
    </center>
    <center>
      <form id="resForm" method="post" target="_self">
        <label for="res_name">Name</label>
        <input type="text" required name="res_name" onfocus="myFunction(this)" value="John Doe" />
        <label for="res_email">Email</label>
        <input type="email" required name="res_email" onfocus="myFunction(this)" value="john@doe.com" />
        <label for="res_tel">Mobile</label>
        <input type="text" required name="res_tel" onfocus="myFunction(this)" value="123456789" />
        <label for="res_notes">Notes (if any)</label>
        <input type="text" name="res_notes" onfocus="myFunction(this)" value="Testing" />
        <label for="res_destination">SELECT DESTINATION</label>
        <select name="res_destination" onfocus="myFunction(this)">
          <option></option>
          <option value="GOA HOLIDAY PACKAGE">GOA HOLIDAY PACKAGE</option>
          <option value="KERALA HOLIDAY PACKAGE">KERALA HOLIDAY PACKAGE</option>
          <option value="AGRA HOLIDAY PACKAGE">AGRA HOLIDAY PACKAGE</option>
          <option value="JAIPUR HOLIDAY PACKAGE">JAIPUR HOLIDAY PACKAGE</option>
          <option value="UDAIPUR HOLIDAY PACKAGE">UDAIPUR HOLIDAY PACKAGE</option>
          <option value="JAISALMER HOLIDAY PACKAGE">JAISALMER HOLIDAY PACKAGE</option>
          <option value="DELHI HOLIDAY PACKAGE">DELHI HOLIDAY PACKAGE</option>
          <option value="JODHPUR HOLIDAY PACKAGE">JODHPUR HOLIDAY PACKAGE</option>
          <option value="MUMBAI HOLIDAY PACKAGE">MUMBAI HOLIDAY PACKAGE</option>
          <option value="PURI HOLIDAY PACKAGE">PURI HOLIDAY PACKAGE</option>
          <option value="SOMNATH HOLIDAY PACKAGE">SOMNATH HOLIDAY PACKAGE</option>
          <option value="TIRUPATI BALAJI PACKAGE">TIRUPATI BALAJI PACKAGE</option>
        </select>
        <label>Travel Date</label>
        <input type="date" required name="res_date" onfocus="myFunction(this)" id="date" value="<?= date("Y-m-d") ?>">
        <label>Travel Slot</label>
        <select name="res_slot" onfocus="myFunction(this)">
          <option value="AM">Day</option>
          <option value="PM">Night</option>
        </select>
        <input type="submit" name="submit" onclick="mysubmit()" value="Submit" />
        <p id="demo"></p>
      </form>
    </center>
    </main>
  </div>
  <!-- // Restaurants -->

  <!-- Footer -->
  <footer>
    <div class="footer">
      <div class="footer-content">
        <div class="footer-section about">
          <h1 class="logo-text">
            <span class="logo-span">VRAMKA</span>
            Creations
          </h1>
          <p class="footer-para">
            WE ARE STUDENTS OF IIIT NAGPUR.
          </p>
          <div class="contact">
            <span><i class="fas fa-phone"></i>&nbsp; +91 XXXXXXXXXX</span>
            <span><i class="fas fa-envelope"></i>&nbsp;
              bt20csexxx@iiitn.ac.in</span>
          </div>
          <div class="socials">
            <a href="https://www.facebook.com/IIIT-Nagpur-277266089645192/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/iiitnofficial/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://twitter.com/IIITN_OFFICIAL?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        &copy; | DESIGNED BY VRAMKA CREATIONS
      </div>
    </div>
  </footer>
  <!-- // Footer -->

</body>

</html>