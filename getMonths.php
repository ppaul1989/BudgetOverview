<?php	

$months = array(
		1 => "Styczen",
		2 => "Luty",
		3 => "Marzec",
		4 => "Kwiecien",
		5 => "Maj",
		6 => "Czerwiec",
		7 => "Lipiec",
		8 => "Sierpien",
		9 => "Wrzesien",
		10 => "Pazdziernik",
		11 => "Listopad",
		12 => "Grudzien"
);

$activeMonth= $_GET["m"];

$username = "pawel";
$password = "pawel1";
$database = "BudgetOverview";
$DBConnect = new mysqli ( "localhost", $username, $password, $database );
$sql = "SELECT * FROM months";
$result = $DBConnect->query ( $sql );

echo '<ul class="panes" id="panes"><li>';

if ($result->num_rows > 0) {
	$rowNum=0;
	while ( $row = $result->fetch_assoc () ) {
		$rowNum++;
		if($rowNum==$activeMonth) {
			$act = "active";
		}else{
			$act = "";
		}
		echo '<div class="button '.$act.'" onclick="selectMonth('.$rowNum.')">'.$months[$row ["month"]].' '.$row ["year"].'</div>';
		if($rowNum%12 == 0)
			echo '</li>
			<li>';
	}
}
$DBConnect->close ();

echo '<div class="buttonPlus" onclick="addNextMonth();">+</div></li>
</ul>';
