<?php
@include('conn1.php');



$sql="SELECT id,firstname,middlename,country,age,gender FROM runners";
$result= mysqli_query($conn,$sql);
if($result->num_rows>0){
    echo" <table>
    <tr>
    <th>ID</th>
    <th>firstname</th>
    <th>middlename</th>
    <th>country</th>
    <th>age</th>
    <th>gender</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
         echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." </td><td>".$row["middlename"]."</td><td>".$row["country"]."</td><td>".$row["age"].$row["gender"]."</td></tr>";

    }
    echo "</table>";
}
else {
    echo "0 results";
  }
  $conn->close();
?>