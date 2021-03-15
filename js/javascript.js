/*choose between payment methods*/
// function check() {
//     var elem = document.getElementById("payOptions");
//     if (elem.value == 'Others') {
//         var att = document.createAttribute("name");
//         att.value= "pay_option";
//         document.getElementById('otherPayOptions').setAttributeNode(att);
//         document.getElementById('otherPayOptions').style.display = "block";
//
//     } else {
//         document.getElementById("otherPayOptions").style.display = 'none';
//     }
// }
function check(){
        let e = document.getElementById("payOptions");
        let name = document.createAttribute("name");

        if(e.value == 'Others'){
            name.value = "pay_option";
            document.getElementById("otherOptionDiv").setAttribute("style","display=block;")
            document.getElementById("otherInput").setAttribute("type","text");
            document.getElementById("otherInput").setAttributeNode(name);
        }
    }

