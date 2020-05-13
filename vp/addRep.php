<?php
include '../includes/autoload.php';

    if(!isset($_SESSION['authenticated']) || $_SESSION['role'] != "VP")
       {
            header('Location: ../index.php');
            exit;
       }
       if($_SESSION['freeze'] == "TRUE")
       {
          // echo "Account Frozen";
           header('Location: accountEdit.php');
       }
   
	$id = $_SESSION['userId'];
	
	$table1 = "user_info";
	$table2 = "users";
	$table3 = "distributors";
        
        
	$upload_msg = "Message: <br />";
	function isUniqueEmail($link, $table1, $email) {
		$query = "SELECT * FROM $table1 WHERE email='$email'";
		$result = mysqli_query($link, $query)or die("MySQL ERROR on query c: ".mysqli_error($link));
		if(mysqli_num_rows($result) >= 1) {
			echo "I'm sorry, that email address is already being used, please use another one.";
			return false;
		} else {
			return true;
		}
	}
	
	// check if form has been submitted
	if(isset($_POST['submit'])){
	
	$rpPhoto = $_FILES['uploaded_file']['tmp_name'];
	$imageDirPath = $_SERVER['DOCUMENT_ROOT'].'/images/sc/';
	$vpPicPath = "";
	
	//grab all form fileds
	$bob = 24503;
	$vpid = $id;
	$scid = mysqli_real_escape_string($link, $_POST['scid']);
	$company = mysqli_real_escape_string($link, $_POST['cname']);
	$fname = mysqli_real_escape_string($link, $_POST['fname']);
	$mname = mysqli_real_escape_string($link, $_POST['mname']);
	$lname = mysqli_real_escape_string($link, $_POST['lname']);
	$title = mysqli_real_escape_string($link, $_POST['title']);
	$gender = mysqli_real_escape_string($link, $_POST['gender']);
	$ssn = mysqli_real_escape_string($link, $_POST['ssn1']);
	$address1 = mysqli_real_escape_string($link, $_POST['address1']);
	$address2 = mysqli_real_escape_string($link, $_POST['address2']);
	$city = mysqli_real_escape_string($link, $_POST['city']);
	$state = mysqli_real_escape_string($link, $_POST['state']);
	$zip = mysqli_real_escape_string($link, $_POST['zip']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$phone = mysqli_real_escape_string($link, $_POST['phone']);
	//$hPhone2 = mysqli_real_escape_string($link, $_POST['hphone2']);
	//$wPhone3 = mysqli_real_escape_string($link, $_POST['hphone3']);
	$mPhone = mysqli_real_escape_string($link, $_POST['mphone']);
	$ext = mysqli_real_escape_string($link, $_POST['ext']);
	$fbPage = mysqli_real_escape_string($link, $_POST['fb']);
	$twitter = mysqli_real_escape_string($link, $_POST['twitter']);
	$linkedin = mysqli_real_escape_string($link, $_POST['lindkedin']);
	$loginPass = mysqli_real_escape_string($link, $_POST['password']);
	$salesMan = $_POST['sales'];
	$ftin = mysqli_real_escape_string($link, $_POST['ftin1']);
	$stin = mysqli_real_escape_string($link, $_POST['stin1']);
	$nonp = mysqli_real_escape_string($link, $_POST['nonp1']);
	//$cellPhone = $_POST['cellphone'];
	//$workPhone = $_POST['workphone'];
	$extPhone = mysqli_real_escape_string($link, $_POST['ext']);
	$paypal = mysqli_real_escape_string($link, $_POST['paypalemail']);
	$landingPage = "setupEditWebsite/accountEdit.php";
	$who = "RP";
	$percent = 6;
	$salt = time(); 			// create salt using the current timestamp 
	$loginPass = sha1($loginPass.$salt); 	// encrypt the password and salt with SHA1
	//$distPic = $_FILES['uploaded_file']['tmp_name'];
	$imageDirPath = $_SERVER['DOCUMENT_ROOT'].'/images/representatives/';
	$imagePath = "";
	
	
	  function process_image($name, $id, $tmpPic, $baseDirPath){

		$cleanedPic = checkName($_FILES["$name"]["name"]);	
		if(!is_image($tmpPic)) {
    			// is not an image
    			$upload_msg .= $cleanedPic . " is not an image file. <br />";
    		} else {
    			if($_FILES['$name']['error'] > 0) {
				$upload_msg .= $_FILES['$name']['error'] . "<br />";
			} else {
				
				if (file_exists($baseDirPath.$id."/".$cleanedPic)){
					$imagePath = "images/representatives/".$id."/".$cleanedPic;
				} else {
					$picDirectory = $baseDirPath;
					
					
					if (!is_dir($picDirectory.$id)){
						mkdir($picDirectory.$id);
						
					}
					$picDirectory = $picDirectory.$id."/";
					move_uploaded_file($tmpPic, $picDirectory . $cleanedPic);
					$upload_msg .= "$cleanedPic uploaded.<br />";
					$imagePath = "images/representatives/".$id."/".$cleanedPic;
					
					
				}// end third inner else
				return $imagePath;
			} // end first inner else
		      } // end else
	     }// end process_image
	    
		//if good email insert data
	    if(isUniqueEmail($link, $table1, $email)) {
		$query1 = "INSERT INTO $table2 (username, password, Security, landingPage, salt, created, lastLogin, role)";
		$query1 .= "VALUES('$email','$loginPass','1','$landingPage','$salt', now(), now(), '$who')";
		$query2 = "INSERT INTO $table1 (companyName, FName, MName, LName, ssn, address1, address2, city, state, zip, email, homePhone, fbPage, twitter, linkedin, salesPerson, cellPhone, workPhone, userPaypal,role,title,gender, userBaseCommPct, fedtin, statetin, threec)";
		$query2 .= " VALUES('$company','$fname','$mname','$lname','$ssn','$address1','$address2','$city','$state','$zip','$email','$hPhone1','$fbPage','$twitter','$linkedin', '$scid','$phone', '$phone', '$paypal','$who', '$title', '$gender', '$percent', '$ftin', '$stin', '$nonp')";
        $query3 = "INSERT INTO $table3 (companyName, FName, MName, LName, ssn, address1, address2, city, state, zip, email, homePhone, fbPage, twitter, linkedin, vpID, workPhone, workPhoneExt,  distPicPath,setupID, role,paypal)";
		$query3 .= " VALUES('$company','$fname','$mname','$lname','$ssn','$address1','$address2','$city','$state','$zip','$email','$hPhone1','$fbPage','$twitter','$linkedin', '$id', '$phone', '$ext', '$imagePath','$scid', '$who','$paypal')";


		mysqli_query($link, "start transaction;");
		// insert data into users table
		$res1 = mysqli_query($link, $query1)or die ("couldn't execute query 1.".mysql_error());
		// insert data into distributors table
		$res2 = mysqli_query($link, $query2)or die ("couldn't execute query 2.".mysql_error());
		
		$res3 = mysqli_query($link, $query3)or die ("couldn't execute query 3.".mysql_error());
		
		if($res1 && $res2 && $res3){
			mysqli_query($link, "commit;");
			$query9 = "SELECT * FROM user_info WHERE email='$email'";
			$res4 = mysqli_query($link, $query9)or die ("couldn't execute query 9.".mysql_error());
			$row = mysqli_fetch_assoc($res4);
			$newUserID = $row['userInfoID'];
			
			$queryx = "UPDATE distributors SET loginid = '$newUserID ', distPicPath='$imagePath' WHERE email = '$email'";
			mysqli_query($link, $queryx)or die ("couldn't execute query x.".mysql_error());
			
			if($rpPhoto != ''){
		    $personalPicPath = process_image('uploaded_file',$newUserID, $rpPhoto, $imageDirPath);
		    if($personalPicPath !=''){
			$query10 = "UPDATE $table1 SET picPath = '$personalPicPath' WHERE userInfoID = '$newUserID'";
			mysqli_query($link, $query10);
						}
		    }
			echo "Your account has been successfuly created.\n\n";
			//newDistributorEmail($email,$FName,$LName,$cellPhone);
			 header( 'Location: accounts.php' );

		} 
	        }
		else
		{   
		    /*
                    mysqli_query($link, "rollback;");
		    echo "I'm sorry, there was a problem creating your account.";
		    */  
		        $query15 = "SELECT * FROM user_info WHERE email='$email'";
			$res15 = mysqli_query($link, $query15)or die ("couldn't execute query 15.".mysql_error());
			$rowC = mysqli_fetch_assoc($res15);
			$newUserID = $rowC['userInfoID'];
			$company2 = $rowC['companyName'];
			$fname2 = $rowC['FName'];
			$lname2 = $rowC['LName'];
			$ssn2 = $rowC['ssn'];
			$ad1 = $rowC['address1'];
			$ad2 = $rowC['address2'];
			$city2 = $rowC['city'];
			$state2 = $rowC['state'];
			$zip2 = $rowC['zip'];
			$fbPage = $rowC['fbPage'];
			$twitter2 = $rowC['twitter'];
			$linkedin2 = $rowC['linkedin'];
			$phone2 = $rowC['workPhone'];
			$ext2 = $rowC['workPhoneExt'];
			$imagePath2 = $rowC['picPath'];
			$paypal2 = $rowC['userPaypal'];
			$title2 = $rowC['title'];
			$gender2 = $rowC['gender'];
	
			
			$query16 = "INSERT INTO distributors (companyName, FName, LName, ssn, address1, address2, city, state, zip, email, fbPage, twitter,
			 linkedin, vpID, workPhone, workPhoneExt,  distPicPath, setupID,loginid, role, paypal, title, gender)";
			 
		        $query16 .= " VALUES('$company2','$fname2','$lname2','$ssn2','$ad1','$ad2','$city2','$state2','$zip2',
		        '$email','$fbPage','$twitter2','$linkedin2', '$id', '$phone2', '$ext2', '$imagePath2', '$scid', '$newUserID', '$who', '$paypal2', 'title2', '$gender2')";
		        $res16 = mysqli_query($link, $query16)or die ("couldn't execute query 16.".mysql_error());
		        
		        echo "Your account has been successfuly created.\n\n";
			//newDistributorEmail($email,$FName,$LName,$cellPhone);
			 header( 'Location: accounts.php' );
	        }
	

	}// end if
	
   $userID = $_SESSION['userId'];
   $query = "SELECT * FROM user_info WHERE userInfoID='$id' and role='VP'";
   $result = mysqli_query($link, $query)or die ("couldn't execute query.".mysql_error());
   $row = mysqli_fetch_assoc($result);
   $pic = $row['picPath'];
   $bob = 24503;
?>
<!DOCTYPE html>
<head>
	<title>FundraisingATM | Add Rep</title>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/simpletabs_styles.css" />
	<script type="text/javascript" src="../js/simpletabs_1.3.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/old/addnew_form_styles.css" />
	
	<style>

form input[type=submit], form input[type=reset], form input#redbutton{
	border:thin solid #777;	
	-moz-border-radius: 7px 7px 7px 7px;
	-webkit-border-radius: 7px 7px 7px 7px;
	border-radius: 7px 7px 7px 7px;
	-moz-box-shadow: 3px 3px 3px #777;
	-webkit-box-shadow: 3px 3px 3px #777;
	box-shadow: 3px 3px 3px #777;
	background-color: #CC0000;
	color: white;
	font-size: .75em;
	cursor: pointer;
}
#redbutton a{
	border:thin solid #777;	
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	-moz-box-shadow: 3px 3px 3px #777;
	-webkit-box-shadow: 3px 3px 3px #777;
	box-shadow: 3px 3px 3px #777;
	height: 1.5em;
	background-color: #CC0000;
	color: white;
	font-size: .75em;
	text-decoration: none;
	padding: .2em;
}
.redbutton:hover{color: #cc0000; background: #fff; }

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
    background-color: #ccc;
}

/* Float the list items side by side */
ul.tab li {
	float: left;
	border: 3px solid #ccc;

	}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: white;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
	color: white;
    background-color: #cc0000;
}

/* Style the tab content */
.tabcontent {
    display: none;
    width: 100%;
    padding: 2px 12px;
    border: 1px solid #ccc;
    border-top: none;
    box-shadow: 0px 0px 15px #888888;
}
.tabcontent{
padding-right:1em;
padding-left:1em;
}
#newLeader{
    margin-top:2em;
}
.form-control{
    margin-bottom:1rem;
}
label{
    margin-top:1rem;
}
.interim-header{
    margin: -2rem 0 -2rem 0;
}
.files {
  border-radius: 25px;
}

</style>
</head>

<body>
<div id="container">
    	<?php include 'header.inc.php' ; ?>
      	<?php include 'sidenav.php' ; ?>
      	
		<div id="content" style="margin-left:35px">
        	<h1 align="center"><b>Add New Representative</b></h1> 
			<div class="table">
				<form class="graybackground" action="addSalesCoord.php" method="POST" enctype="multipart/form-data" id="myForm" name="myForm" onsubmit="return checkForm(this);">
				<div>
					<span id="hd_vp2" style="font-size: 1.2em">Vice President:</span>
					<span id="hd_sc2" style="font-size: 1.1em">Sales Coordinator:</span>

				</div> <!-- end row -->

				<div class="tablerow" >
					<select name="vpid" id="vpid" class="role2">
						<option>Select VP Account</option>
						<?php
						$query = "Select * FROM distributors  WHERE setupID='$id' and role='VP'";
											$result = mysqli_query($link, $query)or die("MySQL ERROR om query 2: ".mysqli_error($link));


											while($row = mysqli_fetch_assoc($result))
											{
						echo '<option value="'.$row['loginid'].'">'.$row[FName].' '.$row[LName].' '.$row[loginid].'</option>';
						}
						?>
					</select>
					<select name="vpid" id="vpid" class="role2">
							<option>Select SC Account</option>
						</select>
				</div> <!-- end row -->
				<br>
				<ul class="tab" style="box-shadow: 0px 0px 15px #888888;">
					<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Single')" id="defaultOpen" style="font-weight:bold">Information</a></li>
					<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Multiple')" style="font-weight:bold">Account Login</a></li>
					<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Five')" style="font-weight:bold">Payment</a></li>
					<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Triple')" style="font-weight:bold">Social Media</a></li>
					<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Four')" style="font-weight:bold">Profile Photo</a></li>
				</ul>

				<div id="Single" class="tabcontent">
					<!-- <form class="" action="addFundMember.php" method="Post" id="myForm" name="myForm" onsubmit="return checkForm(this);" enctype="multipart/form-data"> -->
  					<div class="table" style="width:100%; height:350px">
						<div class="simpleTabs" style="margin-left:30px">
							<!--<ul class="simpleTabsNavigation">
								<li><a href="#">Information</a></li>
								<li><a href="#">Account Login</a></li>
								<li><a href="#">Social Media</a></li>
								<li><a href="#">Profile Photo</a></li>
							</ul> -->

		  					<div>
								<h1 style="color: #cc0000"> <b>Contact Information</b></h1>
								<!--<span>[Group] Leader Type: </span> [Group] = same as the selected group above -->
	
								<div class="tablerow"> <!-- titles -->
									<span id="hd_fname">First</span>
									<span></span>
									<span id="hd_mname">Middle</span>
									<span></span>
									<span id="hd_lname">Last</span>
									<span></span>
									<span id="hd_pname" title="Preferred First Name">Preferred</span>
									<span id="hd_title">Title</span>
									<span id="hd_cname">Company</span>
								</div> <!-- end row -->
								<div class="tablerow"> <!-- inputs -->
									<input id="fname" type="text" name="fname">
									<input id="mname" type="text" name="mname">
									<input id="lname" type="text" name="lname">
									<input id="pname" type="text" name="pname">
									<select name="title" style="border-radius:15px; outline:none;>
										<option value="">---</option>
										<option value="">Mr.</option>
										<option value="">Ms.</option>
										<option value="">Mrs.</option>
										<option value="">Miss</option>
										<option value="">Dr.</option>
									</select>
            						<input id="cname" type="text" name="cname">
								</div> <!-- end row -->

								<table>
									<tr>
										<td id="td_1">
											<div class="tablerow"> <!-- title -->
												<span id="hd_address1">Address 1</span>
											</div> <!-- end row -->
											<div class="tablerow"> <!-- input -->
												<input id="address1" type="text" name="address1">
											</div> <!-- end row -->

											<div class="tablerow"> <!-- title -->
												<span id="hd_address2">Address 2</span>
											</div> <!-- end row -->
											<div class="tablerow"> <!-- input -->
												<input id="address2" type="text" name="address2">
											</div> <!-- end row -->

											<div class="tablerow"> <!-- titles -->
												<span id="hd_city">City</span>
												<span></span>
												<span id="hd_state">State</span>
												<span></span>
												<span id="hd_zip">Zip</span>
											</div>
											<div class="tablerow"> <!-- inputs -->
												<input id="city" type="text" name="city">
												<select id="state" name="state" style="border-radius:15px; outline:none;">
													<option value="" selected="selected">--</option>
													<option value="AL">AL</option>
													<option value="AK">AK</option>
													<option value="AZ">AZ</option>
													<option value="AR">AR</option>
													<option value="CA">CA</option>
													<option value="CO">CO</option>
													<option value="CT">CT</option>
													<option value="DE">DE</option>
													<option value="DC">DC</option>
													<option value="FL">FL</option>
													<option value="GA">GA</option>
													<option value="HI">HI</option>
													<option value="ID">ID</option>
													<option value="IL">IL</option>
													<option value="IN">IN</option>
													<option value="IA">IA</option>
													<option value="KS">KS</option>
													<option value="KY">KY</option>
													<option value="LA">LA</option>
													<option value="ME">ME</option>
													<option value="MD">MD</option>
													<option value="MA">MA</option>
													<option value="MI">MI</option>
													<option value="MN">MN</option>
													<option value="MS">MS</option>
													<option value="MO">MO</option>
													<option value="MT">MT</option>
													<option value="NE">NE</option>
													<option value="NV">NV</option>
													<option value="NH">NH</option>
													<option value="NJ">NJ</option>
													<option value="NM">NM</option>
													<option value="NY">NY</option>
													<option value="NC">NC</option>
													<option value="ND">ND</option>
													<option value="OH">OH</option>
													<option value="OK">OK</option>
													<option value="OR">OR</option>
													<option value="PA">PA</option>
													<option value="RI">RI</option>
													<option value="SC">SC</option>
													<option value="SD">SD</option>
													<option value="TN">TN</option>
													<option value="TX">TX</option>
													<option value="UT">UT</option>
													<option value="VT">VT</option>
													<option value="VA">VA</option>
													<option value="WA">WA</option>
													<option value="WV">WV</option>
													<option value="WI">WI</option>
													<option value="WY">WY</option>
												</select>
												<span></span>
												<input id="zip" type="text" name="zip" maxlength="5" required>
											</div> <!-- end row -->
										</td>
									
                           				<td id="td_2">

											<div class="tablerow"> <!-- titles -->
                  								<br>			
												<span id="hd_mphone1">Mobile Phone</span>
											</div> <!-- end row -->
											<div class="tablerow"> <!-- inputs -->
												<input id="mphone1" type="text" name="mphone">
							
												<select id="mcarrier" title="Needed To Receive Texts From Computer" style="border-radius:15px; outline:none;">
													<option>Select Carrier</option>
													<option>Verizon</option>
													<option>AT&T</option>
													<option>Sprint</option>
													<option>T-Mobile</option>
													<option>U.S. Cellular</option>
													<option>Other</option>
												</select>
											</div> <!-- end row -->
											<div class="tablerow">
												<span id="hd_hphone">Home Phone</span>
											</div> <!-- end row -->
											<div class="row">
												<input id="hphone1" type="text" name="hPhone">
											</div> <!-- end row -->
											<div class="tablerow">
												<span id="hd_wphone">Work Phone</span>
												<span></span>
												<span id="ext">Ext</span>
											</div>
											<div class="row">
												<input id="wphone1" type="text" name="wphone" maxlength="12">
												<input id="ext" type="text" name="ext" maxlength="5">
											</div>
										</td>
									</tr>
								</table>

								<div class="tablerow"> <!-- titles -->
									<span id="hd_bday">Birthday</span>
									<span id="hd_gender"></span>
									
									<span id="hd_gender">Gender</span>
								</div> <!-- end row -->
								<div class="tablerow"> <!-- inputs -->
									<select id="month" name="month" style="border-radius:15px; outline:none;">
										<option value="na">Month</option>
										<option value="1">January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
									<select id="day" name="day" style="border-radius:15px; outline:none;">
										<option value="na">Day</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
									<select id="year" name="year" style="border-radius:15px; outline:none;">
										<option value="na">Year</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
										<option value="1974">1974</option>
										<option value="1973">1973</option>
										<option value="1972">1972</option>
										<option value="1971">1971</option>
										<option value="1970">1970</option>
										<option value="1969">1969</option>
										<option value="1968">1968</option>
										<option value="1967">1967</option>
										<option value="1966">1966</option>
										<option value="1965">1965</option>
										<option value="1964">1964</option>
										<option value="1963">1963</option>
										<option value="1962">1962</option>
										<option value="1961">1961</option>
										<option value="1960">1960</option>
										<option value="1959">1959</option>
										<option value="1958">1958</option>
										<option value="1957">1957</option>
										<option value="1956">1956</option>
										<option value="1955">1955</option>
										<option value="1954">1954</option>
										<option value="1953">1953</option>
										<option value="1952">1952</option>
										<option value="1951">1951</option>
										<option value="1950">1950</option>
										<option value="1949">1949</option>
										<option value="1948">1948</option>
										<option value="1947">1947</option>
										<option value="1946">1946</option>
										<option value="1945">1945</option>
										<option value="1944">1944</option>
										<option value="1943">1943</option>
										<option value="1942">1942</option>
										<option value="1941">1941</option>
										<option value="1940">1940</option>
										<option value="1939">1939</option>
										<option value="1938">1938</option>
										<option value="1937">1937</option>
										<option value="1936">1936</option>
										<option value="1935">1935</option>
										<option value="1934">1934</option>
										<option value="1933">1933</option>
										<option value="1932">1932</option>
										<option value="1931">1931</option>
										<option value="1930">1930</option>
										<option value="1929">1929</option>
										<option value="1928">1928</option>
										<option value="1927">1927</option>
										<option value="1926">1926</option>
										<option value="1925">1925</option>
										<option value="1924">1924</option>
										<option value="1923">1923</option>
										<option value="1922">1922</option>
										<option value="1921">1921</option>
										<option value="1920">1920</option>
										<option value="1919">1919</option>
										<option value="1918">1918</option>
										<option value="1917">1917</option>
										<option value="1916">1916</option>
										<option value="1915">1915</option>
										<option value="1914">1914</option>
									</select>
									<select id="gender" name="gender" style="border-radius:15px; outline:none;">
										<option value="na">Gender</option>
										<option value="female">Female</option>
										<option value="male">Male</option>
									</select>
								</div> <!-- end row -->
							</div> <!-- end tab 1 -->
						</div> <!-- end simple tabs -->
					</div> <!-- end row -->
					<section class="row" style="margin:4rem 0" id="submitButtonSection-form"><!-- SUBMIT BUTTON SECTION ROW -->

					   <div class="tablerow">
						 <input type="submit" name="submit" class="redbutton" value="Save & Exit" onsubmit="return validate()">
						 <span></span>
						 <input type="submit" class="redbutton" value="Save & Add Another">
					   </div> <!-- end row -->
					 </section>
					 <br>
		</div> <!-- end table -->



  <div id="Multiple" class="tabcontent">
    <div class="table" style="width:100%; height:350px">


            <div class="simpleTabs" style="margin-left:30px">
            <div>
              <h1 style="color: #cc0000"><b>Create Your Account Login</b></h1>
               <!-- titles -->
                <span id="hd_loginemail">Email Address</span>
               <!-- end row -->
              <div id="row"> <!-- inputs -->
                <input id="loginemail" type="email" name="email">
              </div> <!-- end row -->
					<br>
              <div id="row"> <!-- titles -->
              <span id="hd_password">Password</span>
			  <span></span><span></span><span></span><span></span>
              <span id="hd_cpassword">Confirm Password</span>
              </div> <!-- end row -->
              <div id="row"> <!-- inputs -->
                <input id="pass1" type="password" name="password" required >
                <input id="pass2" type="password" name="cpassword" onkeyup="checkPass(); return false;" required > <!-- checks passwords to be the same -->
              </div> <!-- end row -->
            
	          </div> <!-- end tab 2 -->
    </div>
  </div>
  <section class="row" style="margin:4rem 0" id="submitButtonSection-form"><!-- SUBMIT BUTTON SECTION ROW -->

<div class="tablerow">
  <input type="submit" name="submit" class="redbutton" value="Save & Exit" onsubmit="return validate()">
  <span></span>
  <input type="submit" class="redbutton" value="Save & Add Another">
</div> <!-- end row -->
</section>
<br>


</div>


<div id="Five" class="tabcontent">
  <div class="table" style="width:100%">


            <div class="simpleTabs" style="margin-left:30px">
            <div>
			<h1 style="color: #cc0000"><b>3 Simple Steps for Payment</b></h1></div>
					<h3 style="color: black"><b>1. PayPal Information</b></h3>
					<p>Please enter your new or existing PayPal information. All commissions are paid next day into your PayPal account.<br> If you prefer, we can set up your PayPal account for you.</p>
					<div class="tablerow"> <!-- title -->
						<span id="hd_ppemail">PayPal Email</span>
					</div> <!-- end row -->
					<div class="tablerow"> <!-- input -->
						<input id="paypalemail" type="email" name="paypalemail">
					</div> <!-- end row -->
					<h3 style="color: black"><b>2. Fund Distribution and Tax Information</b></h3>
					<p>One of the following numbers is required for distribution of funds and also for tax purposes.</p>
					<div class="tablerow"> <!-- titles -->
						<span id="hd_ssn">SSN</span>
						<span></span>
						<span id="hd_ftin">Fed-TIN</span>
						<span></span>
						<span id="hd_stin">State-TIN</span>
						<span></span>
						<span id="hd_nonp">501(c)(3)</span>
					</div> <!-- end row -->
					<div class="tablerow"> <!-- inputs -->
						<input id="ssn1" type="text" name="ssn1"><!--<input id="ssn2" type="text" name="ssn2"><input id="ssn3" type="text" name="ssn3">-->
						<input id="ftin1" type="text" name="ftin1"><!--<input id="ftin2" type="text" name="ftin2">-->
						<input id="stin1" type="text" name="stin1"><!--<input id="stin2" type="text" name="stin2">-->
						<input id="nonp1" type="text" name="nonp1"><!--<input id="nonp2" type="text" name="nonp2">-->
					</div> <!-- end row -->
					<h3 style="color: black"><strong>3. 1099 Form</strong></h3>
					<p>Explanation about 1099 Form <a href="https://turbotax.intuit.com/tax-tools/tax-tips/Self-Employment-Taxes/What-is-an-IRS-1099-Form-/INF14810.html">here</a>.<br>
					Go here to get your official copy of a 1099 form:  <a href="">http://www.irs.gov/Forms-&-Pubs</a></p>
					<h3>Sales Coordinator Total Commission Override: <a style="color:#cc0000;">0.5%</a></h3>

            </div> <!-- end tab 2 -->
			<br>
    </div>
	<section class="row" style="margin:4rem 0" id="submitButtonSection-form"><!-- SUBMIT BUTTON SECTION ROW -->

					   <div class="tablerow">
						 <input type="submit" name="submit" class="redbutton" value="Save & Exit" onsubmit="return validate()">
						 <span></span>
						 <input type="submit" class="redbutton" value="Save & Add Another">
					   </div> <!-- end row -->
					 </section>
					 <br>
</div>


<div id="Triple" class="tabcontent">
  <div class="table" style="width:100%; height:350px">


            <div class="simpleTabs" style="margin-left:30px">
            <div>
  						<h1 style="color: #cc0000"><b>Social Media Connections</b></h1>
  						<div id="row">
  							<span id="hd_fb">Facebook</span>
  							<input id="fb" type="text" name="fb" value="www.facebook.com">
  						</div> <!-- end row -->
  						<div id="row">
  							<span id="hd_tw">Twitter</span>
  							<input id="tw" type="text" name="twitter" value="www.twitter.com">
  						</div> <!-- end row -->
  						<div id="row">
  							<span id="hd_li">LinkedIn</span>
  							<input id="li" type="text" name="linkedin" value="www.linkedin.com">
  						</div> <!-- end row -->
  						<div id="row">
  							<span id="hd_pn">Pinterest</span>
  							<input id="pn" type="text" name="printrest" value="www.pinterest.com">
  						</div> <!-- end row -->
  						<div id="row">
  							<span id="hd_gp">Google+</span>
  							<input id="gp" type="text" name="googleplus" value="plus.google.com">
  						</div>
              <br>
              <br>
              <!-- end row -->
              </div>

              </div>
  			
		</div> <!-- end tab 3 -->
		
		<section class="row" style="margin:4rem 0" id="submitButtonSection-form"><!-- SUBMIT BUTTON SECTION ROW -->

						 <div class="tablerow">
						   <input type="submit" name="submit" class="redbutton" value="Save & Exit" onsubmit="return validate()">
						   <span></span>
						   <input type="submit" class="redbutton" value="Save & Add Another">
						 </div> <!-- end row -->
					   </section>
						<br>

    </div>

<div id="Four" class="tabcontent">
  <div class="table" style="width:100%; height:350px">


            <div class="simpleTabs" style="margin-left:30px">
            <div>
  			<h1 style="color: #cc0000"><b>Profile Photo</b></h1>
            </div>
              <div class="tablerow">
  							<span style="font-size:15px">Upload Profile Photo:</h3>
  							<input type="file" id="" name="uploaded_file">
							  <br>
  							<input type="submit" class="redbutton" value="Upload Photo">
  							<br><br>
  							<span style="font-size:15px">Preview Photo:</h3>
  							<img src="" alt="uploaded profile photo">
  						</div>
              <br><br>

			
               <!-- end row -->
            </div>

  					</div> <!-- end tab 3 -->


			<section class="row" style="margin:4rem 0" id="submitButtonSection-form"><!-- SUBMIT BUTTON SECTION ROW -->
          <div class="tablerow">
            <input type="submit" name="submit" class="redbutton" value="Save & Exit">
			<span></span>
            <input type="submit" class="redbutton" value="Save & Add Another">
          </div> <!-- end row -->
        </section>
		<br>



			<!--<form class="graybackground">
				<h3>--Option 2: Add Multiple Business Associates--</h3>
				<h2>How To Add Multiple Business Associates</h2><br>
				<ol>
					<li><a href="">Download</a> Our Business Associate Setup Spreadsheet</li>
					<li>Input the Data for Each Associate You want to Add</li>
					<li>Upload the Completed Spreadsheet...</li>
				</ol>
				<input type="file" name="">
				<input class="redbutton" type="submit" name="" value="Upload File">-->
        



      </form>
		</div> <!-- end table -->
   <!--end content -->

  <script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</div> <!--end container-->
</div>
<?php include 'footer.php' ; ?>
</div>

</body>
</html>

<?php
   ob_end_flush();
?>