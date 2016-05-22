/**
 * 
 */
var activeMonth = 0;
var currentPane = 0;
var buttonUsed = "";

function displayInputForm(xhttpUpdate) {
	document.getElementById("itemCon").innerHTML = xhttpUpdate.responseText;
	document.getElementById("itemCon").style.visibility = "visible";
	document.getElementById("itemCon").style.opacity = 1.0;

}

function displayContextLocally(text) {
	document.getElementById("itemCon").innerHTML = text;
	document.getElementById("itemCon").style.visibility = "visible";
	document.getElementById("itemCon").style.opacity = 1.0;
	
}

function toggleContextMenuOn(item) {
	var text = "";
	itemId = item.id;
	var y = item.offsetTop;
		var addItemConDisplay = document.getElementById("itemCon").style.visibility;
		if (addItemConDisplay == "hidden") {
			if (itemId == "stats") {
				buttonUsed = "stats";
				document.getElementById("itemCon").style.top = y;
				text = "Statistics"
			}
			else if (itemId == "budget") {
				document.getElementById("itemCon").style.top = y;
				text = "Budget"
			}
			else if (itemId == "logout") {
				document.getElementById("itemCon").style.top = y;
				text = "Logout"
			}
			else if (itemId == "trash") {
				document.getElementById("itemCon").style.top = y;
				text = "Delete budget"
			}
			displayContextLocally(text);

	}
};

function toggleContextMenuOff(itemId) {
			document.getElementById("itemCon").style.visibility = "hidden";
			document.getElementById("itemCon").style.opacity = 0.0;
			document.getElementById("itemCon").style.top = 400;
};

function toggleContextMenuForItem(itemId) {
	var text = "";
	while (true) {
		var addItemConDisplay = document.getElementById("itemCon").style.visibility;
		if (addItemConDisplay == "hidden") {
			if (itemId == "stats") {
				buttonUsed = "stats";
				document.getElementById("itemCon").style.top = 50;
				text = "Statistics"
			}
			if (itemId == "budget") {
				document.getElementById("itemCon").style.top = 0;
				text = "Budget"
			}
			displayContextLocally(text);
			break;
		} else {
			document.getElementById("itemCon").style.visibility = "hidden";
			document.getElementById("itemCon").style.opacity = 0.0;
			document.getElementById("itemCon").style.top = 400;
			if (buttonUsed == itemId) {
				break;
			}
		}
	}
};

function load() {
	var lArrow = document.getElementById("rightArrow");
	lArrow.onclick = function(e) {
		currentPane++;
		showCurrentPane();
	}

	var rArrow = document.getElementById("leftArrow");
	rArrow.onclick = function(e) {
		if (currentPane - 1 >= 0) {
			currentPane--;
			showCurrentPane();
		}
	}
	fetchMonths();
}

function fetchMonths() {
	makeGetRequest("getMonths.php?m=" + activeMonth, updateMonthsList);
}
function addNextMonth() {
	makeGetRequest("addNewMonth.php", fetchMonths);
}

function makeGetRequest(url, callback) {
	var xhttpUpdate = new XMLHttpRequest();
	xhttpUpdate.onreadystatechange = function() {
		if (xhttpUpdate.readyState == 4 && xhttpUpdate.status == 200) {
			callback(xhttpUpdate);
		}
	};
	xhttpUpdate.open("GET", url.toString(), true);
	xhttpUpdate.send();
}

function updateMonthsList(xhttpUpdate) {
	document.getElementById("months").innerHTML = xhttpUpdate.responseText;
	showCurrentPane();
}

function selectMonth(input) {
	activeMonth = input;
	currentPane = Math.floor(activeMonth / 12.1);
	fetchMonths();
}

function showCurrentPane() {
	var pane1 = document.getElementById("panes");
	pane1.style.transform = "translate(" + (currentPane) * -20 + "%,0px)";
}

function getBudgetView() {
	makeGetRequest("getBudget.php", updateBudgetView);
}

function updateBudgetView(xhttpUpdate) {
	document.getElementById("content").innerHTML = xhttpUpdate.responseText;
}
