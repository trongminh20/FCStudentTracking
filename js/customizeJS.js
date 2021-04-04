/*global variable*/

const apsds_group = {
    'RMT_show': ["app_essay", "refer_letter", "intro_of_msg_day1_from",
        "intro_of_msg_day1_to", "intro_of_msg_day2_from", "intro_of_msg_day2_to",
        "intro_fee", "intro_msg_complete", "crc_result", "medical_notes",
        "interview_date", "interview_approve", "rmt_stu_materials[]", "rmt_stu_materials",
        "employment", "exam_date"]
};

const ppes_groups = {
    "RH": ["clinic_shirt_size", "shirt_order_date", "pickup_date"],
    "RMT": ["cli_handbook_receive", "cli_ack_and_agr", "medical_file"],
    "HC": ["foodsafe_dt", "foodsage_contact", "cert_foodsafe_receive", "crc_notes"],
    "SPECO": ["speco"]
};

const payment_group = {'RMT': ["intro_to_message_feee"]};

const grad_groups = {"RMT": ["exam_date"]};

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
    warningTime = setTimeout(() => {
        show_warning();
    }, 15 * 60000);
    // auto logout after 20 mins
    logoutTime = setTimeout(() => {
        do_inactive();
    }, 20 * 60000);
}

function reset_timer() {
    window.clearTimeout(warningTime);
    window.clearTimeout(logoutTime);
    start_timer();
}

function show_warning() {
    if (confirm("Your are inactive for a while" +
        "please login again, click OK if you backed to work or Cancel if you" +
        " want to logout now")) {
        reset_timer();
    } else {
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
    let progID = document.getElementById('programID').value;
    let inputArr = document.querySelectorAll("input, select,label");

    inputArr.forEach(function (e) {
        if (table === "apsds") {
            if (progID !== "RMT") {
                if (in_array(e.name, apsds_group.RMT_show) === 1 ||
                    in_array(e.className, apsds_group.RMT_show) === 1) {
                    e.remove();
                }
            }
        } else if (table === "ppes") {
            if (progID === "RMT") {
                if (in_array(e.name, ppes_groups.HC) === 1 ||
                    in_array(e.className, ppes_groups.HC) === 1) {
                    e.remove();
                } else if (in_array(e.name, ppes_groups.SPECO) === 1 ||
                    in_array(e.className, ppes_groups.SPECO) === 1) {
                    e.remove();
                }
            } else if (progID === "HCA") {
                if (in_array(e.name, ppes_groups.RMT) === 1 ||
                    in_array(e.className, ppes_groups.RMT) === 1) {
                    e.remove();
                } else if (in_array(e.name, ppes_groups.SPECO) === 1 ||
                    in_array(e.className, ppes_groups.SPECO) === 1) {
                    e.remove();
                }
            } else if (progID === "CSW") {
                if (in_array(e.name, ppes_groups.RH) === 1 ||
                    in_array(e.className, ppes_groups.RH) === 1) {
                    e.remove();
                } else if (in_array(e.name, ppes_groups.SPECO) === 1 ||
                    in_array(e.className, ppes_groups.SPECO) === 1) {
                    e.remove();
                }
            }
        } else if (table === "payment_tracking") {
            if (progID !== 'RMT') {
                if (in_array(e.name, payment_group.RMT) === 1 ||
                    in_array(e.className, payment_group.RMT) === 1) {
                    e.remove();
                }
            }
        } else if (table === "graduations") {
            if (progID !== "RMT") {
                if (in_array(e.name, grad_groups.RMT) === 1 ||
                    in_array(e.className, grad_groups.RMT) === 1) {
                    e.remove();
                }
            }
        }
    });
}


/*Text Truncate*/
function showMore(id) {
    document.getElementById(id + 'Overflow').className = '';
    document.getElementById(id + 'MoreLink').className = 'hidden';
    document.getElementById(id + 'LessLink').className = '';

}

function showLess(id) {
    document.getElementById(id + 'Overflow').className = 'hidden';
    document.getElementById(id + 'MoreLink').className = '';
    document.getElementById(id + 'LessLink').className = 'hidden';
}

function shrinkable() {
    let len = 50;
    let target = document.getElementsByClassName("shrinkable");

    if (target.length > 0) {
        for (let i = 0; i < target.length; i++) {
            let fullText = target[i].innerHTML;
            if (fullText.length > len) {
                let trunc = fullText.substring(0, len).replace(/\w+$/, '');
                var remainder = "";
                var id = target[i].id;

                remainder = fullText.substring(len, fullText.length);
                target[i].innerHTML = '<span>'
                    + trunc + '<span class="hidden" id="' + id + 'Overflow">'
                    + remainder +
                    '</span>' +
                    '</span>' +
                    '&nbsp;<a id="' + id + 'MoreLink" href="#!" onclick="showMore(\'' + id + '\');" style="text-decoration-line:underline">' +
                    'Show more' +
                    '</a>' +
                    '<a class="hidden" href="#!" id="' + id + 'LessLink" onclick="showLess(\'' + id + '\');"style="text-decoration-line: underline">' +
                    'Show less' +
                    '</a>';
            }
        }

    }
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


