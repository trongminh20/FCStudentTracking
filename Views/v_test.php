<?php


?>
<style>
    .hidden {
        display: none;
    }

</style>

<table>
    <tr>
        <td id="note1" class="shrinkable">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
            architecto,
            aspernatur
            consectetur cum cupiditate deleniti doloribus ducimus ea et eveniet illum minus, modi mollitia necessitatibus nemo nostrum numquam optio perferendis quam recusandae repellat reprehenderit, repudiandae sint sit sunt tenetur ullam ut vel voluptatum! Adipisci amet dolorem doloribus eaque perspiciatis?</td>
    </tr>
</table>
<script>
window.onload = function(){
    shrinkable();
}
function showMore(id){
    document.getElementById(id+'Overflow').className='';
    document.getElementById(id+'MoreLink').className='hidden';
    document.getElementById(id+'LessLink').className='';

}

function showLess(id){
      document.getElementById(id+'Overflow').className='hidden';
    document.getElementById(id+'MoreLink').className='';
    document.getElementById(id+'LessLink').className='hidden';
}

function shrinkable(){
    let len = 50;
    let target = document.getElementsByClassName("shrinkable");

    if(target.length > 0){
        for(let i = 0; i < target.length; i++){
            let fullText = target[i].innerHTML;
            if(fullText.length > len){
                let trunc = fullText.substring(0, len).replace(/\w+$/,'');
                var remainder = "";
                var id = target[i].id;

                remainder = fullText.substring(len, fullText.length);
                target[i].innerHTML =   '<span>' + trunc + '<span class="hidden" id="' + id + 'Overflow">'+ remainder +'</span></span>&nbsp;<a id="' + id + 'MoreLink" href="#!" onclick="showMore(\''+ id + '\');">More</a><a class="hidden" href="#!" id="' + id + 'LessLink" onclick="showLess(\''+ id + '\');">Less</a>';
            }
        }

    }

}


</script>

