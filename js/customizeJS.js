/*global variable*/
const hiddenForNotRMT = [
    "app_essay",
    "refer_letter",
    "intro_of_msg_day1_from",
    "intro_of_msg_day1_to",
    "intro_of_msg_day2_from",
    "intro_of_msg_day2_to",
    "intro_fee",
    "intro_msg_complete",
    "crc_result",
    "medical_notes",
    "interview_date",
    "interview_approve",
    "rmt_stu_materials[]",
    "rmt_stu_materials",
    "employment",
    "exam_date"
];
var logoutTime;
var warningTime;
/*end global variables*/

/* auto log out section */
function setup() {
    document.addEventListener("onmousemove", reset_timer, false);
    document.addEventListener("wheel", reset_timer, false);
    document.addEventListener("onkeypress", reset_timer, false);
    document.addEventListener("ontouchmove", reset_timer, false);
    start_timer();
}

function start_timer() {
    //show a warning after 15 mins
    warningTime = setTimeout(() => {show_warning();} , 15 * 60000);
    // auto logout after 20 mins
    logoutTime = setTimeout(() => {do_inactive();} , 20 * 60000);
}

function reset_timer() {
    window.clearTimeout(warningTime);
    window.clearTimeout(logoutTime);
    start_timer();
}
function show_warning(){
    if(confirm("Your are inactive for a while"+
        "please login again, click OK if you backed to work or Cancel if you" +
        " want to logout now")){
        reset_timer();
    }else{
        do_inactive();
    }
}

function do_inactive() {
    window.location = "?action=c_auto_logout";
}
/* end of auto logout section*/
/*choose between payment methods*/

function check() {
    let e = document.getElementById("payOptions");
    let name = document.createAttribute("name");
    if (e.value == 'Others') {
        name.value = "pay_option";
        document.getElementById("otherOptionDiv").setAttribute("style", "display=block;")
        document.getElementById("otherInput").setAttributeNode(name);
    } else {
        document.getElementById("otherOptionDiv").style.display = "none";
        document.getElementById("otherInput").name = "";
    }
}

/* for updating record*/

function display() {
    let table = document.getElementById('table').value;
    let rmt = document.getElementById('programID').value;
    let inputArr = document.querySelectorAll("input, select,label");
    inputArr.forEach(function (e) {
        if (rmt != "RMT") {
            if (in_array(e.name, hiddenForNotRMT) == 1 || in_array(e.className, hiddenForNotRMT) == 1) {
                e.remove();
            }
        }
    });
}

function in_array(searchKey, arr) {
    let len = arr.length;
    let result = 0;
    for (let i = 0; i < len; i++) {
        if (arr[i] === searchKey) {
            result = 1;
        }
    }
    return result;
}

