<?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ( (!isset($_POST["uname"])) && (!isset($_POST["pass"])) ){
                print_r($_POST["pass"]);
                echo "handling user login now...";
                echo ".. here could redirect or authenticate";
                echo "and hide login form or something else";
            }
        }
    ?>