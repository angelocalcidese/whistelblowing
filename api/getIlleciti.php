<?php 
require_once "../cors.php";
require_once "../config.php";

$sql = "SELECT * FROM `whisleblowing`";
$result = $conn->query($sql);
$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $object = new stdClass(); 
        $object->id = $row["id"]; 
        $object->segnalatore = $row["segnalatore"]; 
        $object->segnalato = $row["segnalato"]; 
        $object->data = $row["data"]; 
        $object->motivazione = $row["motivazione"]; 
        $object->testo = $row["testo"]; 
        array_push($data, $object);
    }
  } else {
    echo "0 results";
  }

  //print_r($data);
 echo json_encode($data);

$conn->close();
?>