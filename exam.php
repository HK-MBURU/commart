<?php
$con=mysqli_connect('localhost','root','','commart');
$sql='SELECT* /*id,email,pwd*/ FROM user_details';
$query=mysqli_query($con,$sql);

/*<span>Id:</span> <?php echo $row1['id']; ?>
<span>Id:</span> <?php echo $row1['id']; ?>
<span>E-mail:</span> <?php echo $row1['email']; ?>
<span>Password:</span> <?php echo $row1['pwd']; ?>*/
echo "<table>"; // start a table tag in the HTML

while($row = mysqli_fetch_array($query)){   //Creates a loop to loop through results
echo "<tr><td>" . htmlspecialchars($row['email']) . "</td><td>" . htmlspecialchars($row['pwd']) . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; 

mysqli_close($con);
?>