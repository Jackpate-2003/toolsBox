<?php header('Access-Control-Allow-Origin: *');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tt'])) {
	
	$url = 'http://toolsbox.c1.biz/api2.php';
	$tt = $_POST['tt'];
	
	$data = array('tt' => $tt);
	
	$options = array(
            'http' => array(
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) {
            echo "NO!";
        }
        else {
            echo "OK!";
        }
	
}