<!DOCTYPE html>
<html>
<head>
<title>Thank you for donating here is your animal and its ID Number:</title>
</head>
<body>
<h1> Animal records</h1>
<?php

include('connect.php');


$AquaticAnimal = $_POST['AquaticAnimal'];
$gender = $_POST['gender'];
$id = $_POST['id'];
$fname = $_POST['fname'];



echo 'Your name: ' . $fname . '<br />';
echo 'Animal: ' . $AquaticAnimal . '<br />';
echo 'gender: ' . $gender . '<br />';
echo 'id: ' . $id . '<br />';



$sql = "INSERT INTO animalsdb (fname, animal, gender,id) VALUES ('$fname','$AquaticAnimal', '$gender','$id')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
</body>
</html>
