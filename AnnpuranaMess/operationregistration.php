<?php
function inputfields($placeholder, $name, $value, $type)
{
    $elements = "
    <div class=\"form-group my-4\">
                <input type='$type' name='$name' placeholder='$placeholder' 
                class=\"form-control\" value='$value' autocomplete=\"off\">
            </div>
    ";
    echo $elements;
}