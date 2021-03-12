/*choose between payment methods*/
function check() {
    var elem = document.getElementById("payOptions");
    if (elem.value == 'others') {
        document.getElementById("otherPayOptions").style.display = 'block';
    } else {
        document.getElementById("otherPayOptions").style.display = 'none';
    }
}

/*choose between programs*/
function selectPro(){
	var elem = document.getElementById("selectProgram");
   	if(elem.value == 'rmt'){
    	document.getElementById("rmt").style.display = 'block';
   	} else {
    	document.getElementById("rmt").style.display = 'none';
   }
} 

