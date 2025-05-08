<?php
include "connection.php";
$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$address = $_POST["address"];
$appointment = $_POST["appointment"];
$messages = $_POST["messages"];
$sql = mysqli_query($conn,"INSERT INTO `contact_form`(`id`, `name`, `email`, `number`, `address`, `appointment`, `messages`) VALUES ('','$name','$email','$number','$address','$appointment','$messages')");
if ($sql) {
    echo "<script>
        alert('Form submitted successfully!');
        window.location.href = 'contact_us.html';
        </script>";
} else {
    echo "<script>
        alert('Form submission failed. Please try again.');
        window.location.href = 'contact_us.html';
        </script>";
}

?>