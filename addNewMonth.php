<?php
$username = "pawel";
$password = "pawel1";
$database = "BudgetOverview";
$DBConnect = new mysqli ( "localhost", $username, $password, $database );
$sql = "SELECT * FROM months ORDER BY id DESC LIMIT 1";

$result = $DBConnect->query ( $sql );

if ($result->num_rows > 0) {
	// output data of each row
	while ( $row = $result->fetch_assoc () ) {
		$lastMonth=$row["month"];
		$lastYear=$row["year"];
	}
} else {
	$lastMonth=12;
	$lastYear=2015;
}

$month=$lastMonth;
$year=$lastYear;

if($lastMonth+1 > 12) {
	$year++;
	$month=1;
}else{
	$month++;
}

$insert = "INSERT INTO months (month, year, dataTableName)
VALUES (".$month.",".$year.",\"budget_".$year."_".$month."\")";

echo $insert;


if ($DBConnect->query($insert) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $insert . "<br>" . $DBConnect->error;
}

$DBConnect->close ();