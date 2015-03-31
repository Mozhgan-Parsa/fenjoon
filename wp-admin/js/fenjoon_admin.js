function get_coselected_children_string(){
	var checkboxes = document.getElementsByClassName('checkbox');
	var coselected_children_string = '';
	var coselected_children_array = new Array();
	for(var j=0;j<checkboxes.length;j++){
		if (checkboxes[j].checked) coselected_children_array.push(checkboxes[j].value);
	}
	coselected_children_string = coselected_children_array.join('-');
	return coselected_children_string;
}
window.onload = function(){
	var checkboxes = document.getElementsByClassName('checkbox');
	var coselected_children_string = get_coselected_children_string();
	document.getElementById('coselected_children_string').innerHTML = coselected_children_string;
	
	for(var i=0;i<checkboxes.length;i++){
		checkboxes[i].onclick = function(){
			coselected_children_string = get_coselected_children_string();
			document.getElementById('coselected_children_string').innerHTML = coselected_children_string;
			document.getElementsByName('coselected_children_string')[0].setAttribute('value', coselected_children_string);
		}
	}
}