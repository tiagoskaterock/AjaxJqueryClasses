<?php 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];


$conn = mysqli_connect("localhost", "tiago", "123", "ajax_jquery") or die("Error");

$sql = "INSERT INTO `people` (`id`, `first_name`, `last_name`, `age`) VALUES (NULL, '$first_name', '$last_name', '$age');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}