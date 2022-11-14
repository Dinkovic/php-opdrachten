<?php

function check_vote() {
    $name = "D";
    $age = "29";
        if ($age >= 18) {
            echo $name . ", je mag stemmen";
        }
            else {
                echo $name . ", je bent niet oud genoeg om te stemmen";
            }
}

check_vote();

?>