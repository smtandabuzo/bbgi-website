<?php
header("Content-Security-Policy: script-src 'self' 'unsafe-inline' insert-home.php");
if(empty($_SERVER['CONTENT_TYPE']))
{
  $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$company = $_REQUEST['company'];
$industry = $_REQUEST['industry'];
$message = $_REQUEST['message'];

//if(isset($_POST(['submit']))){
if(!empty($name) || !empty($email) || !empty($phone) || !empty($company) || !empty($industry) || !empty($message)){
   $host = "localhost";
   $dbUsername = "bbgicgch_admin";
   $dbPassword = "Ch4ng31sg00d";
   $dbname = "bbgicgch_bbgi";

    //$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $actual_link = $_SERVER["HTTP_REFERER"];

    echo "Actual link " + $actual_link;

   //create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //echo "Connected successfully";

   if(mysqli_connect_error()){
     die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect());
   } else {
    $SELECT = "SELECT name From suppliers Where email = ? Limit 1";
    $INSERT = "INSERT Into suppliers (name, email, phone, company, industry, message) values(?,?,?,?,?,?)";

    //Prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0){
     $stmt->close();

     $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("ssssss", $name, $email, $phone, $company, $industry, $message);
     $stmt->execute();
        echo "<script type='text/javascript'>alert(' New supplier inserted successfully');
                                             window.location.href='http://bbgi.co.za/index.php';</script>";
    } else {
     //echo " Supplier already registered in our database";
        echo "<script type='text/javascript'>alert(' Supplier already registered in our database');
                                             window.location.href='http://bbgi.co.za/index.php';</script>";
    }
    $stmt->close();
    $conn->close();
   }
} else {
  echo "All fields are required";
  die();
}
//}
}
?>
