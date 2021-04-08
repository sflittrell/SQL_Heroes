<?php

$servername = "localhost";
$username = "root";
$password = "My#password";
$dbname = "sql_heroes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$route = $_GET['route'];

switch ($route) {
  case "getAllHeroes":
    $myData = getAllHeroes($conn);
    break;
  case "getHeroByID":
    $id = $_GET['hero_id'];
    $myData = getHeroById($conn, $id);
    break;
  case "getAllAbilities":
    $myData = getAllAbilities($conn);
    break;
  default:
    $myData = json_encode([]);
}

echo $myData;


$conn->close();

function getAllHeroes($conn){
  $data = array();
  
    $sql = "SELECT * FROM heroes";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($data, $row);
    }
  } 
  
  return json_encode($data);
}


function getHeroByID($conn, $heroID) {
  $data = array();
  
    $sql = "SELECT * FROM heroes WHERE id = " . $heroID;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($data, $row);
    }
  } else {
    $data = "0 results";
  }
  
  return json_encode($data);
}

function getAllAbilities($conn){
  $data = array();
  
    $sql = "SELECT * FROM abilities";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($data, $row);
    }
  } 
  
  return json_encode($data);
}

function getAllAbilities($conn){
  $data = array();
  
    $sql = "SELECT * FROM abilities";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($data, $row);
    }
  } 
  
  return json_encode($data);
}

// function getAllAbilities($conn){
//   $data = array();
  
//     $sql = "SELECT * FROM abilities";
//   $result = $conn->query($sql);

//   if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       array_push($data, $row);
//     }
//   } 
  
//   return json_encode($data);
// }



?>