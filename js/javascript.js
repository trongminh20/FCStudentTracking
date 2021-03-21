/*choose between payment methods*/

function check(){
        let e = document.getElementById("payOptions");
        let name = document.createAttribute("name");
        if(e.value == 'Others'){
            name.value = "pay_option";
            document.getElementById("otherOptionDiv").setAttribute("style","display=block;")
            document.getElementById("otherInput").setAttributeNode(name);
        }else{
            document.getElementById("otherOptionDiv").style.display = "none";
            document.getElementById("otherInput").name= "";
        }
    }
/* for updating record*/
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

    function display() {
        var table = document.getElementById('table').value;
        var rmt = document.getElementById('programID').value;
        var inputArr = document.querySelectorAll("input, select,label");
        inputArr.forEach(function (e) {
            if (rmt != "RMT") {
                if (in_array(e.name, hiddenForNotRMT) == 1 || in_array(e.className, hiddenForNotRMT) == 1) {
                    e.remove();
                }
            }
        });
    }

    function in_array(searchKey, arr) {
        var len = arr.length;
        var result = 0;
        for (var i = 0; i < len; i++) {
            if (arr[i] === searchKey) {
                result = 1;
            }
        }
        return result;
    }