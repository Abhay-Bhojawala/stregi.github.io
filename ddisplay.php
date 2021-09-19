<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"studentdatabase");

$result = mysqli_query($con,"SELECT * FROM abhay");

echo "<table border='1'>
<tr>
  <th>fname</th>
  <th>lname</th>
  <th>age</th>
  <th>email</th>
  <th>date_of_birth</th>
  <th>gender</th>
  <th>department</th>
  <th>college</th>
  <th>mobile</th>
  <th>address</th>
  <th>update</th>
  <th>delete</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['date_of_birth'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['department'] . "</td>";
echo "<td>" . $row['college'] . "</td>";
echo "<td>" . $row['mobile'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
?>

<td><a href="dupdate.php?id=<?php echo $row['mobile']; ?>">Update</a></td>
<td><a href="ddelete.php?id=<?php echo $row['mobile']; ?>">Delete</a></td>

<?php
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>