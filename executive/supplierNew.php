<?php
   session_start();
   ob_start();
   include "../includes/connection.inc.php";
   include "../includes/connection.inc2.php";
   //include('../samplewebsites/imageFunctions.inc.php');
   $id = $_SESSION['userId'];
   //$link = connectTo();
   $link = connectTo2();

   $servername = "localhost";
   $username = "gogrea6_amoodf5_dssupply";
   $psw = "_s0]oX0.yh36";
   $dbname = "gogrea6_amoodf5_supply";
   $conn = new mysqli($servername, $username, $psw, $dbname);

    // Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
     if(isset($_POST['submit']))
    {

     $supName = mysqli_real_escape_string($link, $_POST['sn']);
     $supPhone = mysqli_real_escape_string($link, $_POST['phone']);
     $supAddress = mysqli_real_escape_string($link, $_POST['ad']);
     $supCity = mysqli_real_escape_string($link, $_POST['city']);
     $supState = mysqli_real_escape_string($link, $_POST['state']);
     $supZip = mysqli_real_escape_string($link, $_POST['zip']);
     $supEmail = mysqli_real_escape_string($link, $_POST['email']);
     $supPass = mysqli_real_escape_string($link, $_POST['pass']);
     $supCode = mysqli_real_escape_string($link, $_POST['code']);
     $password = hash('sha256', $supPass);
     $url = "index.html";
     $urlTwo = "index.html"; // Wholesale site? Which link should be used?

      // prepare and bind
     $stmt = $conn->prepare("INSERT INTO users (userName, userEmail, supplyCode, phone, address, city, state, zip, rawPass, userPass, url1, url2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssssssssss", $supName, $supEmail, $supCode, $supPhone, $supAddress, $supCity, $supState, $supZip, $supPass, $password, $url, $urlTwo);

     //$stmt->execute();

     if ($stmt->execute())
     {
          // it worked
          echo "New records created successfully";
          header("Location: viewSuppliers.php");

     }
     else
     {
         // it didn't
         echo $stmt->error;
     }


     $stmt->close();
     $link->close();
     /*
     $sql = "INSERT INTO users (userName, userEmail, supplyCode, phone, address, city, state, zip, userPass)";
     $sql .= "VALUES('$supName', '$supEmail', '$supCode', '$supPhone', '$supAddress', '$supCity', '$supState', '$supZip', '$password')";
     $result = mysqli_query($link, $sql)or die ("couldn't execute query x.".mysqli_error($link));
     if($result)
     {
         // it worked
          echo "New records created successfully";
     }
     else
     {
        echo "Failed";
     }
     */
   }

?>
