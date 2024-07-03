<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `addjob` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: jobbedit.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
