<?php
   session_start();
   ob_start();
   include '../includes/functions.php';
  
  /* if(!isset($_SESSION['authenticated']) || $_SESSION['role'] != "EX") {
  header('Location: ../index.php');
  exit;
}
  */
  include "../includes/connection.inc.php";
  include "../includes/connection.inc2.php";
  //include ('../samplewebsites/imageFunctions.inc.php');
  $id = $_SESSION['userId'];
  $link = connectTo();
  $link2 = connectTo2();

?>
<body>
<div id="container">
      <?php //include 'header.inc.php' ;
            //include 'sidenav.php' ; 
            include 'header.inc.php';
      
      ?>

      <div id="content">
      <br>
      <!--<div class="col-lg-4">-->
      <h3>View Suppliers</h3>

      <table class="table table-bordered">
      <th>Supplier Name</th>
    	<th>Email</th>
    	<th>Supplier Code</th>
    	<th>Phone</th>
    	<th>Address</th>
    	<th>City</th>
    	<th>State</th>
    	<th>Zip Code</th>
    	<th>Password</th>
    	<th colspan="2">Edit</th>

  <!-- Using a connection to the db to fetch associated information and display 
  This MySQLi format needs to be changed to PDO for security purposes against SQL Injection -->
    <?php
      $offset = 0;
      $rec_limit = 10;
      // $rec_limit will be used to parse items from the database at increments of 10.
      
      
      if(!$link2) {
        die ('Could not connect:' .mysqli_error($link2));

      }

      //Get total number or records before displaying
      $count = "SELECT count(userEmail) FROM users";
      $find_count = mysqli_query($link2, $count);

      if(! $find_count ){
        dir('Count not get data: ' .mysqli_error($link2));
      }
      $NUM = mysqli_fetch_array($find_count, MYSQLI_NUM);
      $rec_count = $NUM[0];

      if( isset($_GET{'page'})){
        $page = $_GET{'page'} + 1;
        $offest = $rec_limit * $page ;
      }else{
        $page = 0;
        $offset = 0;
      }

      // creating previous page
      $left_rec = $rec_count - ($page * $rec_limit);
      $query = "SELECT * FROM users LIMIT $offset, $rec_limit";
      //Our $query here limits the number of fetched records to 10 currecntly with $rec_limit
      $result = mysqli_query($link2, $query)
      or die("MYSQL ERROR query 2: ".mysqli_error($link));
      
      if(!$result){
        die('Could not get data: ' . mysqli_error());
      }
      while($row = mysqli_fetch_assoc($result))
    	{
    	   echo "<tr>
    	    <td>".$row['userEmail']."</td>
          <td>".$row['userName']."</td>
    	    <td>".$row['supplyCode']."</td>
    	    <td>".$row['phone']."</td>
    	    <td>".$row['address']."</td>
    	    <td>".$row['city']."</td>
    	    <td>".$row['state']."</td>
    	    <td>".$row['zip']."</td>
    	    <td>".$row['rawPass']."</td>
    	    <td>";
    	    echo'
    	    <button type="button" name="edit" value="Edit" id="'.$row['userId'].'" class="btn btn-info  btn-xs view_data" /><img src="../images/edit2.png" /></button></td><td>
    	    <button type="button" name="edit" value="Edit" id="'.$row['userId'].'" class="btn btn-info" /><img src="../images/3trash.png" /></button>
    	    </td></tr>';
      
      }
?>

<!-- Pagination is responsible for the FIRST LAST PREVIOUS NEXT links related
to records on the tables displayed on the page.
Currently this is not working correctly and needs to be addressed.
  <ul class="pagination">
    <li><a href="?page=1">First</a></li>
    <li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>">Prev</a>
    </li>
    <li class="<?php if($page >= $rec_count){ echo 'disabled'; } ?>">
        <a href="<?php if($page >= $rec_count){ echo '#'; } else { echo "?page=".($page + 1); } ?>">Next</a>
    </li>
    <li><a href="?page=<?php echo $rec_count; ?>">Last</a></li>
</ul>

    -->
       <?php
      mysqli_close($link2);
  
      /* PDO Construction Start
      try{
        $dbh = new PDO ('mysql:localhost;dbname=gogrea6_amoodf5_gm2012', $username, $password);
        foreach($dbh->query('SELECT * FROM users') as $row) 
        {
        print_r($row);
        //Use Tables here by echoing HTML snippet above.
        }
        
        //$dbh = null; Not sure where this null came from - unecessary
      
        } catch (PDOException $e) {
        print "Erorr!: " . $e->getMessage() . "<br/>";
        die();
      }

      */
    ?>


      </table>
      <input type="button" class="btn btn-info" value="Add Supplier" onclick="location.href = 'addSupplier.php';">
     <br>
     <br>
     <br>
      <div>
        <div id="dataModal" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss"modal">&times;</button>
        <h4 class="modal-title">Edit Details</h4>
        <div class="modal-body" id="edit_detail"></div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
        </div>
        </div>
        </div>
     </div>

      </div><!--content-->
      <?php include 'footer.php' ; ?>
      </div><!--container-->
      </body>
      </html>
