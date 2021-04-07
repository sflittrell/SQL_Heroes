<?p

$servername = "localhost";
$username = "username";
$password = "My#password";
$dbname = "sql_heroes"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$route = $_GET['route'];

switch ($route) {
  case "getAllHeroes":
    $myData = getAllHeroes($conn);
    break;
  case "createBattle":
    $myData = createBattle($conn, 2, 4, 4);
    break;
  case "getHeroByID":
    //
    $id = $_GET["hero_id"];
    $myData = getHeroByID($conn, $id);
    break;
  default:
   $myData = json_encode([]);
}

echo $myData;

$conn->close();

function getAllHeroes($conn){
  $data=array();
  
  $sql = "SELECT * FROM heroes";
  $result = $conn->query($sql);
  
   // blank array
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
//          unset($row['nombre']);
         array_push($data,$row); // push rows to array $myData
      }
  } 

?>