<?php
$form = new Form(['method' => 'POST', 'action' => '?action=v_test_validation']);
$form->add_label([], 'Username');
$form->add_input(['id'=>'username', 'type' => 'text', 'name' => 'username', 'onchange' => 'validate_txt(this.id)']);
$form->add_label([], 'full name');
$form->add_input(['id'=>'fname', 'type' => 'text', 'name' => 'fname', 'onchange' => 'validate_txt(this.id)']);
$form->add_input(['type' => 'submit', 'name' => 'send', 'value' => 'submit']);
?>

<script>

    function validate_txt(id) {
        let txt = document.getElementById(id);
        let val = txt.value;
        let node = document.createAttribute('style');
        node.value = "border: 1px solid red";
        let spec = /^(\w+[^;!])$/;
        if (!val.match(spec)) {
            txt.setAttributeNode(node);
            txt.value = 'Not a valid data';
        }
    }
</script>
