<!DOCTYPE html>
<html lang="en">

<head>
  <title>Northlink</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  /*Style the header */

  header {
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
  }

  /*Create two columns/boxes that floats next to each other */

  nav {
    float: left;
    width: 30%;
    height: 300px;
    /* only for demontration, should be removed*/
    background: #ccc;
    padding: 20px;
  }

  /* Style the list inside the menu*/

  nav ul {
    list-style-type: none;
    padding: 0px;
  }

  article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px;
    /* only for demontration, should be removed*/
  }

  /*Clear floats after the columns */
  section::after {
    content: "";
    display: table;
    clear: both;
  }

  /* Style the footer */

  footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
  }

  /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to
 each other, on small screens */
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
    <h3>Student Information System</h3>

  </header>

  <section>
    <nav>
      <ul>
        <li><a href="#">Students</a></li>
        <li><a href="#">Faculty</a> </li>
        <li><a href="#">Courses Offered</a> </li>
      </ul>
    </nav>

    <article>
      <h1>Add New Student</h1>
      <form action="action_page.php">
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname"><br>
        <label for="fname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname"><br><br>
        <input type="submit" value="Submit">
      </form>

    </article>
  </section>
  <footer>
    <p>Footer</p>
  </footer>

</body>

</html>