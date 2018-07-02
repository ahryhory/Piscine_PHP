window.onload = function() {
	createList();
};

function createList() {
	var cookies = document.cookie.split(';');
	if (cookies != 0) {
		var i = cookies.length - 1;
		while (i >= 0) {
			var list = cookies[i].split('=');
			var lsNum = list[0].split(':');
			if (lsNum != 0 && lsNum[1].match(/list*/g)) {
				addElement(list[1], lsNum[0].toString().trim());
			}
			i--;
		}
	}
}

function addElement(text, id) {
	var newDiv = document.createElement("div");
	newDiv.id = id;
	newDiv.style["width"] = "150px";
	newDiv.style["height"] = "150px";
	newDiv.style["display"] = "inline-block";
	newDiv.style["margin"] = "5px";
	newDiv.style["background-color"] = "#FFFAF0";
	newDiv.style["border"] = "1px solid #A9A9A9";
	newDiv.style["border-radius"] = "10%";
	newDiv.style["font-family"] = "'Comic Sans MS', cursive, sans-serif";
	newDiv.style["line-height"] = "150px";
	newDiv.style["text-align"] = "center";
	var textField = document.createTextNode(text);
	newDiv.appendChild(textField);
	newDiv.setAttribute("onclick", "deleteCookie(\'" + id + "\')");
	lst = document.getElementById('ft_list');
	lst.insertBefore(newDiv, lst.firstChild);
}

function newList() {
	var list = prompt("Enter new TO DO:");

	if (list != null && list != "") {
		var d = new Date();
		var id = d.getTime();
		document.cookie = id + ":list" + "=" + list + ";";
		addElement(list, id);
	}
}

function deleteCookie(id) {
	var bol = confirm("You want to remove that TO DO?");
	if (bol == false)
		return;
	name = id + ":list";
	document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	Element.prototype.remove = function() {
		this.parentElement.removeChild(this);
	}
	document.getElementById(id).remove();
}