<?php 

define('DB_HOST', 'localhost');
 define('DB_NAME', 'phpmyadmin');
 define('DB_USER','root');
  define('DB_PASSWORD','');
   $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
    $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
    function NewUser()
     { $fullname = $_POST['name']; 
      $email = $_POST['email'];
       $password = $_POST['phone']; 
       $address = $_POST['addr']; 
       $query = "INSERT INTO customers (name,email,phone,address) VALUES ('$name','$email','$phone','$address')"; 
       $data = mysql_query ($query)or die(mysql_error()); }
       function Bill() 
         { if(!empty($_POST['user'])) 
    { 
      $query = mysql_query("SELECT * FROM customers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
      if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
        { newuser(); } 
      else 
        { echo "Your address has been updated"; } } } 
      if(isset($_POST['submit'])) 
        { Bill(); } ?>
      <html>
      <head>
      <title>Bill Details Confirmed</title>
    </head>
      <body>
      <center><a href="index.php"><h1>Click here to start shopping</h1></a>
    </center>
  </body>
    </html>