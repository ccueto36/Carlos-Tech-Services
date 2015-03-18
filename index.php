<!DOCTYPE html>
<html>
  <head>
     <title> Cueto's Tech Services </title>
  </head>
 <style>
  body {
    background-image: url("tech_background.jpg");
  }
  #nav {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
  }
  table, th, td {
     border: 1px solid black;
}
  #nav li {
      display: table-cell;
      height: 87px;
      width: 16.6666666667%;
      line-height: 87px;
      text-align: center;
      background: #E6E6A3;
      border-right: 1px solid #fff;
      white-space: nowrap; 
  }
  
  a {
    font-size: 25px;
    display: block;
    width: 120px;
    background-color: #FFFFAC;
  }
 </style>
  <ul id="nav">
    <li><a href="index.php">Home</a> </li>
    <li><a href="services.html">Services</a> </li>
    <li><a href="rates.html">Rates</a> </li>
    <li><a href="contact_us.html">Contact Us</a> </li>
    <li><a href="webmaster.html">Webmaster</a> </li>
</ul>
  
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "Jykii51994";
  $dbname = "customers";
  
  //Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  //Create connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  echo "Connected successfully<br/>";
  

  
  //sql to create table
  $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP)";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: \n" . $conn->error;
    }
    
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Juan', 'Cueto', 'mcaraballo11@aol.com')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully. \n";
    } else {
      echo "Error: " .$sql."<br>".$conn->error;
    }
    
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
    $conn->close();
  ?>
  }
  <body>
    <br>
    <h1 style="color: #3EC453" >Welcome to Cueto's Tech Services! </h1> <p style="font-size:larger;
    color: #3EC453"> We provide the basic and most common fixes
    to most tech-related problems. <br> Give us a call or use the Contact Us form above
    to receive an estimate.<br> Expect to receive a response within 1-2 business days. </p>
  </body>
</html>

