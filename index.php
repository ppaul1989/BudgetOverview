<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1250">
<link rel="stylesheet" type="text/css" href="mainStyle.css">
<title>Insert title here</title>
<script>

function load() {
var lArrow = document.getElementById("leftArrow");
lArrow.onclick=function (e) {
	var pane1=document.getElementById("panes");
	pane1.style.transform="translate(-20%,0px)";
}
var rArrow = document.getElementById("rightArrow");
rArrow.onclick=function (e) {
	var pane1=document.getElementById("panes");
	pane1.style.transform="translate(0%,0px)";
}
}

</script>
</head>
<body onload="load()">

	<div class="sideMenu">
		<div class="buttonVertical"></div>
		<div class="buttonVertical"></div>
		<div class="buttonVertical"></div>
		<div class="buttonVertical"></div>
		<div class="buttonVertical"></div>
		<div class="buttonVertical"></div>
	</div>

	<div class="menu">

				<div class="leftArrow" id="leftArrow">"<"</div>		
<div class="carousel"> 
			<ul class="panes" id="panes">
				<li id="2016_pane">
					<div class="button">styczen 2016</div>
					<div class="button">luty 2016</div>
					<div class="button">marzec 2016</div>
					<div class="button">kwiecien 2016</div>
					<div class="button">maj 2016</div>
					<div class="button">czerwiec 2016</div>
<!-- 					<div class="button">lipiec 2016</div> -->
<!-- 					<div class="button">sierpien 2016</div> -->
<!-- 					<div class="button">wrzesien 2016</div> -->
<!-- 					<div class="button">pazdziernik 2016</div> -->
<!-- 					<div class="button">listopad 2016</div> -->
<!-- 					<div class="button">grudzien 2016</div> -->
				</li>
				<li id="2017_pane">
					<div class="button">styczen 2017</div>
					<div class="button">luty 2017</div>
					<div class="button">marzec 2017</div>
					<div class="button">kwiecien 2017</div>
					<div class="button">maj 2017</div>
					<div class="button">czerwiec</div>
					<div class="button">lipiec</div>
					<div class="button">sierpien</div>
					<div class="button">wrzesien</div>
					<div class="button">pazdziernik</div>
					<div class="button">listopad</div>
					<div class="button">grudzien</div>
				</li>
<!-- 				<li> -->
<!-- 					<div class="button">styczen</div> -->
<!-- 					<div class="button">luty</div> -->
<!-- 					<div class="button">marzec</div> -->
<!-- 					<div class="button">kwiecien</div> -->
<!-- 					<div class="button">maj</div> -->
<!-- 					<div class="button">czerwiec</div> -->
<!-- 					<div class="button">lipiec</div> -->
<!-- 					<div class="button">sierpien</div> -->
<!-- 					<div class="button">wrzesien</div> -->
<!-- 					<div class="button">pazdziernik</div> -->
<!-- 					<div class="button">listopad</div> -->
<!-- 					<div class="button">grudzien</div> -->
<!-- 				</li> -->
<!-- 				<li> -->
<!-- 					<div class="button">styczen</div> -->
<!-- 					<div class="button">luty</div> -->
<!-- 					<div class="button">marzec</div> -->
<!-- 					<div class="button">kwiecien</div> -->
<!-- 					<div class="button">maj</div> -->
<!-- 					<div class="button">czerwiec</div> -->
<!-- 					<div class="button">lipiec</div> -->
<!-- 					<div class="button">sierpien</div> -->
<!-- 					<div class="button">wrzesien</div> -->
<!-- 					<div class="button">pazdziernik</div> -->
<!-- 					<div class="button">listopad</div> -->
<!-- 					<div class="button">grudzien</div> -->
<!-- 				</li> -->
<!-- 				<li> -->
<!-- 					<div class="button">styczen</div> -->
<!-- 					<div class="button">luty</div> -->
<!-- 					<div class="button">marzec</div> -->
<!-- 					<div class="button">kwiecien</div> -->
<!-- 					<div class="button">maj</div> -->
<!-- 					<div class="button">czerwiec</div> -->
<!-- 					<div class="button">lipiec</div> -->
<!-- 					<div class="button">sierpien</div> -->
<!-- 					<div class="button">wrzesien</div> -->
<!-- 					<div class="button">pazdziernik</div> -->
<!-- 					<div class="button">listopad</div> -->
<!-- 					<div class="button">grudzien</div> -->
<!-- 				</li> -->
			</ul>
		</div>

		
		<div class="rightArrow" id="rightArrow">></div>
		
	</div>
	<div class="content">

<table>

<tr>
<td>
sad
</td>
<td>
sad
</td>
<td>
sad
</td>
<td>
sad
</td></tr>
<tr>
<td>
sad
</td>
<td>
sad
</td>
<td>
sad
</td>
<td>
sad
</td></tr>
</table>
    
    <?php
				$username = "pawel";
				$password = "pawel1";
				$database = "BudgetOverview";
				$DBConnect = new mysqli ( "localhost", $username, $password, $database );
				$sql = "SELECT * FROM months";
				$result = $DBConnect->query ( $sql );
				
				if ($result->num_rows > 0) {
					// output data of each row
					while ( $row = $result->fetch_assoc () ) {
						echo "id: " . $row ["id"] . " - Date: " . $row ["month"] . "/" . $row ["year"] . " " . $row ["table"] . "<br>";
						$data = "SELECT * FROM " . $row ["table"];
						
						$resultData = $DBConnect->query ( $data );
						if ($resultData->num_rows > 0) {
							// output data of each row
							while ( $row = $resultData->fetch_assoc () ) {
								echo "id: " . $row ["id"] . " - Type: " . $row ["type"] . "/" . $row ["table_name"] . " " . "<br>";
							}
						}
					}
				} else {
					echo "0 results";
				}
				
				$DBConnect->close ();
				
				?>
	
	
		</div>
    </body>
</html>