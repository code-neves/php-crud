<?php
include "config.php";
$id = $_GET["id"];
$sql = "DELETE FROM usuarios WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: lista.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
