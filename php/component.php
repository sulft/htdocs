<?php 
    function inputElement($afficher,$value) {
        $element= 
        "
        <div class='form-floating'>
        <textarea class='form-control' value='$value' placeholder='$afficher' id='floatingTextarea2' style='height: 100px'></textarea>
        <label for='floatingTextarea2'>$afficher</label>
        </div>
        ";

        echo $element;
    }
?>