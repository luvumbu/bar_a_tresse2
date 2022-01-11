<h1>
    Liste des elements
</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div>
    <?php

include("../model/class/php/connexion.php"); 
  


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `information_form` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: <h1>" . $row["id_information_form"] ."</h1>";

$id_information_form = $row["id_information_form"] ;





// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
  die("Connection failed: " . $conn2->connect_error);
}

$sql2 = 'SELECT * FROM `information_form_plus` WHERE `id_information_form`="'.$id_information_form.'" ORDER BY `id_information_form` ASC';
$result2 = $conn2->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo "id: " . $row["name_information_form"] ;
  }
} else {
  echo "0 results";
}
$conn2->close();


echo "<br/>" ; 









  }
} else {
  echo "0 results";
}
$conn->close();

?>

</body>
</html>