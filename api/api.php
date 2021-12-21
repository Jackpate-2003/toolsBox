<?php header('Access-Control-Allow-Origin: https://tools-box.vercel.app/');

$allowed = array('https://tools-box.vercel.app/');

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
        $GLOBALS['decryption_key'], $GLOBALS['options'], $GLOBALS['decryption_iv']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo $_SERVER['HTTP_ORIGIN'];

    if(isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], $allowed)) {
        $fp = fopen('data/users.txt', 'a');
        fwrite($fp, encrypt('User'));
        fclose($fp);

        echo "OK!";

    }
    else {
        echo "NO!";
    }

}

else {
    echo "Not currect!";
}