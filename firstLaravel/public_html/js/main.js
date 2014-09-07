window.onload = function (){
	var html = document.documentElement;
	var body = document.body;
	var height_diff =   html.clientHeight - body.clientHeight;
	console.log(height_diff);
	if(height_diff > 0) {
		document.getElementsByClassName('footer')[0].style.marginTop = height_diff - 70 + "px";
		console.log(document.getElementsByClassName('footer'));
	}
};

function goBack() {
    window.history.back();
}    
