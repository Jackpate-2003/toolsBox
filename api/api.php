<?php header('Access-Control-Allow-Origin: *');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo $_SERVER['HTTP_ORIGIN'];

}

else {
    echo "Not currect!";
}