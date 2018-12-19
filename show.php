<?php
$host = "localhost";
    $dbUsername = "id6583992_zogla";
    $dbPassword = "091234567890";
    $dbname = "id6583992_server";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = mysqli_query($conn,"SELECT * FROM register");

echo '<table border=1 cellspacing=5 cellpadding=8 id="customers">
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
        empty-cells: hide;

	margin-left:auto; 
    margin-right:auto;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
	    empty-cells: hide;

}
td:empty{
  display: none;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
	    empty-cells: hide;

}
</style>
<div style="    background-color: #767;  text-align: center;   width: 50%;
  margin: 0 auto; width: 670px;

">
  <h1>Information table</h1>
</div>
<tr>
<td><b>ID</b></td>
<td><b>Username</b></td>
<td><b>password</b></td>
<td><b>gender</b></td>
<td><b>Email</b></td>
<td><b>phoneCode</b></td>
<td><b>phone</b></td>';

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" .
$row['id'] . '</td><td>' . 
$row['username'] . '</td><td>' .
$row['password'] . '</td><td>' . 
$row['gender'] . '</td><td>' .
$row['email'] . '</td><td>' . 
$row['phoneCode'] . '</td><td>' .
$row['phone'] . '</td><td>';

echo '</tr>';

}

echo "</table>"; //Close the table in HTML

//Make sure to close out the database connection
?>
