<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Success | Payment Pending</title>
    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Order Status</h1>
    <p>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
    <p>Please select your nearest store:
    	<select>
  <option value="Dhk">Dhakuria</option>
  <option value="Bhl">Behala</option>
  <option value="hwh">Howrah</option>
  <option value="sal">Salt Lake</option>
</select>
 and your preferred pick-up time:
 <select>
  <option value="1">11am-12pm</option>
  <option value="2">2pm-3pm</option>
  <option value="3">5pm-6pm</option>
  <option value="4">7pm-0pm</option>
</select>
for the items.</p>
    <p>Please <a href="pay.php"> proceed to pay online </a> to generate barcode and collect product from the stores.</p>
    <p> You can pay in the store as well, but in case you're not able to pick-up items on the same day, your order will be cancelled automatically. Don't forget to carry your order id.</p>
</div>
<div><center><a href='home.html' style"margin:20px;">Back to Home page</center></div>
</body>
</html>