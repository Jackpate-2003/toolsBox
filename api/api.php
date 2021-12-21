<?php header('Access-Control-Allow-Origin: https://tools-boxe.vercel.app/');

$allowed = array('https://tools-box.vercel.app/');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo $_SERVER['HTTP_ORIGIN'];

    if(isset($_SERVER['HTTP_ORIGIN']) && && in_array($_SERVER['HTTP_ORIGIN'], $allowed)) {
        echo "OK!";
    }
    else {
        echo "NO!";
    }

}

else {
    echo "Not currect!";
}