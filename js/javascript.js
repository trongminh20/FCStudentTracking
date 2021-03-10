function check() {
    var elem = document.getElementById("payOptions");
    if (elem.value == 'others') {
        document.getElementById("otherPayOptions").style.display = 'block';
    } else {
        document.getElementById("otherPayOptions").style.display = 'none';
    }
}
