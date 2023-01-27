<!DOCTYPE html>
<html>

<body>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sarnorthlink";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//Taking all values from the form data (input)
$firstname = $_REQUEST['First Name'];
$lastname = $_REQUEST['Last Name'];
	
	$sql = "INSERT INTO student(firstName, lastName) VALUES ('Clarish', 'Sargado')";
	
if ($conn->query($sql) === TRUE) {

	echo "New record created successfully";
	}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	$conn->close();
	?>
</body>

</html>