<?php
   session_start();
   ob_start();
   include "../includes/connection.inc.php";
   include "../includes/connection.inc2.php";
   //include('../samplewebsites/imageFunctions.inc.php');
   $id = $_SESSION['userId'];
   $link = connectTo();
  //  $link2 = connectTo2();

?>
<body>
  <div id="container">
    <?php include 'header.inc.php' ; ?>
    <?php include 'sidenav.php' ; ?>

    <div id="content">

      <br>
      <div class="table" style="margin-left: 30px">
        <form class="" action="supplierNew.php" method="post">
          <div class="interim-form" style="width:50%">
            <div class="interim-header"><h2>Add Product Supplier</h2></div>
              <div class="col-lg-7">
                <br>
                <span for="email">Supplier Name</span>
                <input type="text" class="form-control input-sm" id="suppname" placeholder="" name="sn">
                <br>
              </div>
              <div class="col-lg-7">
                <span for="email">Phone Number</span>
                <input type="text" class="form-control input-sm" id="suppemail" placeholder="" name="phone">
                <br>
              </div>
              <div class="col-lg-7">
                <span for="email">Supplier Address</span>
                <input type="text" class="form-control input-sm" id="suppad" placeholder="" name="ad">
                <br>
              </div>
              <div class="col-lg-7">
                <span for="email">City</span>
                <input type="text" class="form-control input-sm" id="suppad" placeholder="" name="city">
                <br>
              </div>
              <div class="col-lg-4">
                <span for="email">State</span>
              </div>
              <div class="col-lg-4">
                <select id="state" name="state">
                  <option value="" selected="selected">--</option>
                  <option value="AK">Alaska</option>
                  <option value="AL">Alabama</option>
                  <option value="AR">Arkansas</option>
                  <option value="AZ">Arizona</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DC">District of Columbia</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="IA">Iowa</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MD">Maryland</option>
                  <option value="ME">Maine</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MO">Missouri</option>
                  <option value="MS">Mississippi</option>
                  <option value="MT">Montana</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="NE">Nebraska</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NV">Nevada</option>
                  <option value="NY">New York</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VA">Virginia</option>
                  <option value="VT">Vermont</option>
                  <option value="WA">Washington</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WV">West Virginia</option>
                  <option value="WY">Wyoming</option>
                </select>
                <br>
              </div>
              <br>
              <div class="col-lg-4">
                <span for="email">Zip Code</span>
                <input type="text" class="form-control input-sm" id="zip" placeholder="" name="zip">
                <br>
              </div>
              <div class="col-lg-7">
                <span for="email">Supplier Code</span>
                <input type="text" class="form-control input-sm" id="zip" placeholder="" name="code">
                <br>
              </div>
              <hr>
              <div class="col-lg-7">
                <span for="email">Email Address</span>
                <input type="email" class="form-control input-sm" id="suppemail" placeholder="example@email.com" name="email"><br>
              </div>
              <div class="col-lg-4">
                <span for="email">Password</span>
                <input type="password" id="password" placeholder="" name="pass"><br>
                <br>
              </div>
              <div class="col-lg-4">
                <br><br>
                <button type="submit" class="btn btn-default" name="submit">Submit</button>
                <br>
              </div>
            </div>
        </form>
      </div>
    </div><!--content-->
    <?php include 'footer.php' ; ?>
  </div><!--container-->
</body>
</html>
