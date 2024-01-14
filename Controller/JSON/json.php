<?php

if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "project");
 
 $query = "SELECT * FROM schedule WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["teacherName"] = $row["teacherName"];
  $data["courseName"] = $row["courseName"];
  $data["time"] = $row["time"];

 }

 echo json_encode($data);
}
?>
