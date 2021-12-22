<?php header('Access-Control-Allow-Origin: https://tools-box.vercel.app');

$url = 'http://toolsbox.c1.biz/api.php';

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST'
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
else {
    echo "OK!";
}
var_dump($result);

/*$allowed = array('https://tools-box.vercel.app');

$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Non-NULL Initialization Vector for encryption
$encryption_iv = '9378291270937469';
// Store the encryption key
$encryption_key = "JaCkPAte_2003";

function encrypt($data) {
    return openssl_encrypt($data, $GLOBALS['ciphering'],
        $GLOBALS['encryption_key'], $GLOBALS['options'], $GLOBALS['encryption_iv']);
}

function decrypt($encryption) {
    return openssl_decrypt ($encryption, $GLOBALS['ciphering'],
        $GLOBALS['encryption_key'], $GLOBALS['options'], $GLOBALS['encryption_iv']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo $_SERVER['HTTP_ORIGIN'];

    if(isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], $allowed)) {

        $file = "users.txt";
        $current = file_get_contents($file);
        $enc = encrypt('Hello!');
        $current .= $enc;
        $current .= "\n";
        file_put_contents($file, $current);

        echo "OK!";

    }
    else {
        echo "NO!";
    }

}

else {
    echo "Not currect!";
}*/