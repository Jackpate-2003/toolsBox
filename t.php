<?php header('Access-Control-Allow-Origin: https://tools-box.vercel.app');

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    echo $_SERVER['HTTP_ORIGIN'];

    if(isset($_SERVER['HTTP_ORIGIN']) && isset($_POST['ip']) && $_SERVER['HTTP_ORIGIN'] == 'https://tools-box.vercel.app') {

        try {

            $servername = "fdb31.biz.nf";
            $username = "4010278_toolsbox";
            $password = "P.Kw*epM4rlU.Hha";
            $dbname = "4010278_toolsbox";
            $ip = $_POST['ip'];

            $url = 'https://api.ipdata.co/8.8.8.8?api-key=61879b767bf74129f7784bfc4225bb44aa6dc0a0852deecf3df434cd';

            $options = array(
                'http' => array(
                    'method'  => 'GET'
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            if ($result === FALSE) { /* Handle error */ }
            else {

                $obj = json_decode($result);

                $ip_address = $obj->ip;
                $tor = $obj->threat->is_tor;
                $proxy = $obj->threat->is_proxy;
                $country = $obj->country_code . '-' . $obj->continent_name;

                $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "INSERT INTO users (IP, is_tor, is_proxy, country)
VALUES ('$ip_address', '$tor', '$proxy', '$country')";

                $stmt = $mysqli->prepare($sql);

                $stmt->execute();

                $stmt->close();

                $conn->close();


            }

        }

        catch (Exception $ex) {
            echo $ex;
        }

    }

}

else {
    echo "Not currect!";
}

?>