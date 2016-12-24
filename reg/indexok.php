<?php
session_start();
$db_user="root";//userName
$db_pass="";//password
$db_serv="localhost";//hostName
$db_name="register";//dbName

$mysqli= new mysqli($db_serv, $db_user, $db_pass, $db_name);
$mysqli->set_charset("utf8");
if (mysqli_connect_errno()){
		printf("Impossible connect to database, error N ", mysqli_connect_error());
		exit;
	}

$sql = "SELECT * FROM reg";
$result = $mysqli->query($sql);
echo("conect");
?>
<html>
<head>
<title>Register OK</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.pack-1.7.1.js"></script>
<style>
label span {
	color: #EA5200;
	font-weight:bold;
}
label.error {
	background:url("unchecked.gif") no-repeat 0px 0px;
	padding-left: 16px;
	padding-bottom: 2px;
}
label.checked {
	background:url("checked.gif") no-repeat 0px 0px;
}
</style>
</head>

<body>
<br>OK register<p>
<?php 
if ($result->num_rows > 0) {
    // output data
    while($row = $result->fetch_assoc()) {
?>
<td>
    <tr>
		<td><?php echo $row["name"]; ?> | </td>
		<td><?php echo $row["password"]; ?> | </td>
		<td><?php echo $row["email"]; ?> | </td>
    </tr>
	
</td>
<?php	}
} else {
    echo "0 results";
}
?>
<a href ="<?php $del = "delete.php?id=".$row['id']; 
	echo $del ;?>"> Видалити </a><br>
	<a href ="index.php"> Index </a><br>
</body>
</html>