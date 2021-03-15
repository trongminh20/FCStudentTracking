/*choose between payment methods*/
function check() {
    var elem = document.getElementById("payOptions");
    if (elem.value == 'Others') {
        document.getElementById("otherPayOptions").style.display = 'block';
    } else {
        document.getElementById("otherPayOptions").style.display = 'none';
    }
}


