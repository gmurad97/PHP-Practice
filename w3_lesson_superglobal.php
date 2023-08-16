<?php

//SUPER GLOBAL

// $GLOBAL
/* print_r("<pre>");
print_r($GLOBALS);

$x = 5; */

/* function func(){
    global $x;
    echo $x;
}

func(); */

//==================================================

/* function func(){
    echo $GLOBALS["x"];
}

func(); */

//==================================================

//$_SERVER

/* print_r("<pre>");
print_r($_SERVER);
print_r("</pre>");
$_SERVER["HTTP_USER_AGENT"] = "sethub_bot_v_1_2";

print_r("<br><pre>");
print_r($_SERVER["HTTP_USER_AGENT"]); */



//==================================================

//$_REQUEST - CONTAINS $_POST $_GET $_COOKIE
?>

<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="<?php /* echo $_SERVER['PHP_SELF']; */ ?>">
        <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    } */
    ?>
</body>

</html> -->


<?php 

//CODEIGNITER 3 AND NATIVE PHP

/* $this->input->post("input_name",?bool_xss_clean) == $_POST[]; */