<?php
require "connect_db.php";
$sql = "CREATE TABLE IF NOT EXISTS `reg` (
  `ID` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$sql1 = "ALTER TABLE `reg` ADD UNIQUE KEY `ID` (`ID`);";

$sql2 = "ALTER TABLE `reg` MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully" . "<br>";
	if ($mysqli->query($sql1) === TRUE){
		if ($mysqli->query($sql2) === TRUE){
			echo "Table modifice successfully"."<br>";	
		}
		else {
			echo "Error creating table: " . $mysqli->error;
			}	
	}
} else {
    echo "Error creating table: " . $mysqli->error;
}
?>
