<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1250">
<link rel="stylesheet" type="text/css" href="mainStyle.css">
<link rel="stylesheet" type="text/css" href="budgetStyle.css">
<title>Insert title here</title>
<script src="js/main.js"></script>
<script src="js/budgetLogic.js"></script>
</head>
<body onload="load()">

	<div class="sideMenu">
		<div class="buttonVertical" id="budget"
			onmouseenter="toggleContextMenuOn(this);"
			onmouseleave="toggleContextMenuOff(this);" onclick="getBudgetView()"></div>
		<div class="buttonVertical" id="stats"
			onmouseenter="toggleContextMenuOn(this);"
			onmouseleave="toggleContextMenuOff(this);"></div>
<!-- 		<div class="buttonVertical"></div> -->
<!-- 		<div class="buttonVertical"></div> -->
		<div class="buttonVertical" id="trash"
			onmouseenter="toggleContextMenuOn(this);"
			onmouseleave="toggleContextMenuOff(this);"></div>
		<div class="buttonVertical" id="logout"
			onmouseenter="toggleContextMenuOn(this);"
			onmouseleave="toggleContextMenuOff(this);"></div>

		<div class="contextMenu" id="itemCon"></div>
	</div>

	<div class="menu">

		<div class="leftArrow" id="leftArrow">"<"</div>
		<div class="carousel" id="months"></div>
		<div class="rightArrow" id="rightArrow">></div>
	</div>
	<div class="content" id="content"></div>
</body>
</html>