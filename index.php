<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1250">
<title>Insert title here</title>
</head>
    <body>
    <?php
    $username="pawel";
    $password="pawel1";
    $database="BudgetOverview";
    $DBConnect = new mysqli("localhost",$username,$password,$database);
    $sql = "SELECT * FROM months";
    $result = $DBConnect->query($sql);
    
    if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
    		echo "id: " . $row["id"]. " - Date: " . $row["month"]."/" . $row["year"]. " " .$row["table"]. "<br>";
    		$data = "SELECT * FROM ".$row["table"];
    		
    		$resultData = $DBConnect->query($data);
    		if ($resultData->num_rows > 0) {
    			// output data of each row
    			while($row = $resultData->fetch_assoc()) {
    				echo "id: " . $row["id"]. " - Type: " . $row["type"]."/" . $row["table_name"]. " " . "<br>";
    			}
    		}
    	}
    } else {
    	echo "0 results";
    }
    
    $DBConnect->close();
    
	?>
	
	
	
    </body>
</html>