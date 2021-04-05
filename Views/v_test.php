<?php
?>
<style>
    .active{
        background-color: blue;
    }
</style>
<ul onclick="setActive();">
    <li><a href="#">Home</a></li>
    <li><a href="#">link1</a></li>
</ul>

<script>
    function setActive() {
        var eles = document.getElementsByTagName("LI");
        var classname = document.createAttribute("class");
        classname.value = "active";
        for (var i = 0; i < eles.length; i++) {
            if (eles[i].class === "active") {
                eles[i].setAttribute("class","");
            } else {
                eles[i].setAttributeNode(classname);
            }
        }
    }


</script>

