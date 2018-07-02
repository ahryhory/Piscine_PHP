$( document ).ready(function() {
	$("#ft_list").load("select.php");
});

function addElement(text, id) {
	$('#ft_list').prepend($('<div>').attr("class", "ls").attr('id', id).attr('onclick', "deleteCookie(\'" + id + "\')").text(text));
}

function newList() {
	var list = prompt("Enter new TO DO:");

	if (list != null && list != "") {
		var d = new Date();
		var id = d.getTime();
		var data = id + ":list" + ";" + list + " ";
		addElement(list, id);
		$.get("insert.php?todo=" + data);
	}
}

function deleteCookie(id) {
	var bol = confirm("You want to remove that TO DO?");
	if (bol == false)
		return;
	name = id + ":list";
	$.get("delete.php?name=" + name);
	Element.prototype.remove = function() {
		this.parentElement.removeChild(this);
	}
	document.getElementById(id).remove();
}