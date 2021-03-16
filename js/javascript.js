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

        }
    }

