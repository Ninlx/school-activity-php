<!DOCTYPE html>
<html lang="en>
<head>
    <title>CCS Template</title>
    <meta charset=" utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two colums/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px;
  /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px;
  /* only for demonstration, should be removed */
}

/* Style the footer */
footer {
  background-color: #777;
  display: flex;
  padding: 10px;
  text-align: center;
  justify-content: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small sreens */
@media (max-width: 600px) {

  nav,
  article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>

<body>

  <header>
    <h2>Northlink Technological College</h2>
    <h3>Student Infromation System</h3>
  </header>

  <section>
    <nav>
      <ul>
        <li><a href="#">Students</a></li>
        <li><a href="#">Faculty</a></li>
        <li><a href="#">Courses</a></li>
      </ul>
    </nav>

    <article>
      <h1>List of Students</h1>
      <?php
            $servername = "localhost";
            $username = "root";
            $password = "Admin";
            $dbname = "northlink";

            //create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            //Check Connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT StudentID, lastName , firstName FROM student";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                echo "<table>";
                echo "<tr><td>StudentID</td><td>lastName</td><td>firstName</td></tr>"; //table heading

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["StudentID"] . "</td><td>" . $row["lastName"] . "</td><td>" . $row["firstName"] . "</td></tr>";
                    //	echo "<tr><td>". $row["StudentID"]. "</td><td>". $row["lastName"]. "</td><td>". $row["firstName"]. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
    </article>
  </section>

  <footer>
    <p>Footer</p>
  </footer>

</body>

</html>