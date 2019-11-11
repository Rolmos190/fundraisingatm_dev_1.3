<?php
session_start();
ob_start();

include("includes/connection.inc.php");
$link = connectTo();

$groupid = $_GET['groupid'];
$productid = $_GET['prodid'];
$table = "products";
$query = "SELECT * FROM $table WHERE productID = $productid";
$result = mysqli_query($link, $query) or die(mysqli_error());
$row_count = mysqli_num_rows($result);
$banner = $_SESSION['banner'];

$row = mysqli_fetch_assoc($result);
$productName = $row['productName'];
$productID = $row['productID'];
$description = $row['description'];
$Contents = $row['Contents'];
$retailPrice = $row['retailPrice'];
$wholesalePrice = $row['wholesalePrice'];
$dimensions = $row['dimensions'];
$weight_lbs = $row['weight_lbs'];
$productLrgPicPath = $row['productLrgPicPath'];

$query2 = "SELECT * FROM Dealers WHERE loginid = '$groupid'";
$result2 = mysqli_query($link, $query2) or die(mysqli_error());
$row1 = mysqli_fetch_assoc($result2);
$setup_person = $row1['setuppersonid'];

$repNum = $setup_person;
$return_cancel = 'http://www.greatmoods.com/product.php?prodid='.$productid.'&groupid='.$groupid;

require_once('services.php');
$config = array(
    // Services
    'services' => $services,
    // Weight
    'weight' => 2, // Default = 1
    'weight_units' => 'lb', // lb (default), oz, gram, kg
    // Size
    'size_length' => 5, // Default = 8
    'size_width' => 6, // Default = 4
    'size_height' => 3, // Default = 2
    'size_units' => 'in', // in (default), feet, cm
    // From
    'from_zip' => 55120, 
    'from_state' => "OR", // Only Required for FedEx
    'from_country' => "US",
    // To
    'to_zip' => 89117,
    'to_state' => "MN", // Only Required for FedEx
    'to_country' => "US",
    
    // Service Logins
    'ups_access' => '', // UPS Access License Key
    'ups_user' => '', // UPS Username  
    'ups_pass' => '', // UPS Password  
    'ups_account' => '', // UPS Account Number
    'usps_user' => '', // USPS User Name
    'fedex_account' => '510087747 ', // FedEX Account Number
    'fedex_meter' => '118576423' // FedEx Meter Number 
);

$ship = new ShippingCalculator ($config);
// Get Rates
$rates = $ship->calculate();
?>
	
<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $productName; ?></title>
<link href="../css/mainRecruitingStyles.css" rel="stylesheet" type="text/css">

<!--<script>
function myFunction()
{
alert("Basket Contents:\n<?php echo $Contents; ?>\n\nDimensions: <?php echo $dimensions; ?>\n\nShipping Weight: <?php echo $weight_oz; ?>");
}
</script>-->
<script>
document.getElementById("pal").style.visibility="hidden";
</script>
</head>

<body>
<div id="container">
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'navigation/leftSidebarNavProducts.php'; ?>
    
    <div id="contentMain858">
        <h1><?php echo $productName; ?></h1>
        
        <div id="col1panel">
            <img src="<?php echo $productLrgPicPath;?>" width="532" height="706" alt="Product Photo"> 
        </div> <!--end col1panel-->
        
        <div id="col2panel">
            
            <div class="pricepanel">
                <h3>$<?php echo $retailPrice.$rates; ?></h3>
         
           
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_parent">
                
                <table class="productpage" id="pal">
                <tr>
                    <td>
                    <input id="greeting" type="hidden" name="on1" value="Greeting to Person Receiving the Gift (Below):" >Greeting to Person Receiving the Gift (Below):
                    <input id="greeting" type="text" name="os1" maxlength="200"></td>
                </tr>
                <tr>
                    <td>
                    <input type="hidden" name="on0" value="Shipping Date">Shipping Date:
                    <select name="os0">
                        <option value="Week before Easter"> Week before Easter</option>
                        <option value="Week before Easter"> Week before Mother's Day</option>
                        <option value="Week before Easter"> Week before Graduation</option>
                        <option value="Week before Easter"> Week before Father's Day</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Quantity:&nbsp;
                    <input id="quantity" type="text" name="quantity" size="3" value="1">
                    </td>
                </tr>
                <tr><td>
                <center>
                
                    <input   type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" align="top" alt="Make payments with PayPal - it\'s fast, free and secure!">
                </center>
                </td></tr>
                </table>
                <img alt=""  border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                <input type="hidden" name="add" value="1">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="custom" value="<?php echo $repNum;?>">
	        <input type="hidden" name="business" value="gmbaskets@yahoo.com">
	        
	        <!-- ************** ENTER ITEM NAME ************** -->
	        <input type="hidden" name="item_name" value="<?php echo $productName;?>">
	        <input type="hidden" name="item_number" value="<?php echo $productID;?>">
	        
	        <!-- ************** ENTER ITEM PRICE ************** -->
	        <input type="hidden" name="amount" value="<?php echo $retailPrice;?>">
	        <input type="hidden" name="buyer_credit_promo_code" value="">
	        <input type="hidden" name="buyer_credit_product_category" value="">
	        <input type="hidden" name="buyer_credit_shipping_method" value="">
	        <input type="hidden" name="buyer_credit_user_address_change" value="">
	        <input type="hidden" name="no_shipping" value="2">
	        <input type="hidden" name="return" value="http://www.greatmoods.com/thankyou.php">
	        <input type="hidden" name="cancel_return" value="<?php echo $return_cancel; ?>">
	        <input type="hidden" name="notify_url" value="http://greatmoods.com/ipnDB.php">
	        <input type="hidden" name="cn" value="Note to <?php echo $id;?> (optional)">
	        <input type="hidden" name="currency_code" value="USD">
	        <input type="hidden" name="shipping" value="6.99">
	        <input type="hidden" name="shipping2" value="6.99">
	        
	        <!-- ************** ENTER ITEM Weight ************** -->
	        <input type="hidden" name="weight" value="<?php echo $weight_lbs; ?>">
	        <input type="hidden" name="weight_cart" value="<?php echo $weight_lbs; ?>">
	        <input type="hidden" name="weight_unit" value="lbs">
	        <input type="hidden" name="lc" value="US">
	        <input type="hidden" name="bn" value="PP-ShopCartBF">
	        
	        </form>
	    </div>
	    
	    <div class="descriptionpanel">
	        <h5><?php echo $productName; ?></h5>
	        <p><?php echo $description; ?></p>
	        
	        <div class="link">
	            <!--<input type="button" onclick="myFunction()" value="Click for Product Description" />-->
	        </div>
	    </div>
	</div> <!--end col2panel--> 
    </div> <!--end contentMain858-->
        <?php include 'footer.php' ; ?>
</div> <!--end container-->
</body>
</html>
<?php
ob_end_flush();
?>