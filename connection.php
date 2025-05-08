<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "petworld";
$conn = mysqli_connect($dbhost,$dbuser,$dbpasswoord,$dbname);
if ($conn) {
    // header("location:Contact_us.php");
    "<script>
        alert('connection success');
    </script>";
    // echo "connection success";
}
else {
    echo "connection failed";
}
?>