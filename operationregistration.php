<?php
function inputfields($placeholder, $name, $value, $type, $id)
{
    $elements = "
    <div class=\"form-group my-4\">
                <input type='$type' name='$name' id='$id' placeholder='$placeholder' 
                class=\"form-control\" value='$value' autocomplete=\"off\">
            </div>
    ";
    echo $elements;
}