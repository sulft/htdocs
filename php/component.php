<?php 
    function textElement($name,$afficher,$value) {
        $element= 
        "
        <div class='form-floating'>
        <textarea class='form-control' name='$name' value='$value' placeholder='$afficher' id='floatingTextarea2' style='height: 100px'></textarea>
        <label for='floatingTextarea2'>$afficher</label>
        </div>
        ";

        echo $element;
    }

    //création de boutons
    function buttonElement($btnid,$styleclass, $text, $name, $attr) {
        $btn = "
            <button name='$name' class='$styleclass' id='$btnid'>$text</button>
        ";

        echo $btn;
    }

?>

