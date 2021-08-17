 <?php
//POST DATA
$student_id = explode(" ", $_POST['student'])[0];
$name = explode(" ", $_POST['student'])[1];
$surname = explode(" ", $_POST['student'])[2];
$name_course = $_POST['name_course'];
$payment = $_POST['payment'];
//API Url
$url = 'http://localhost:3000/payments';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'student_id' =>  $student_id,
    'name' =>  $name,
    'surname' =>  $surname,
    'name_course' =>  $name_course,
    'payment' =>  $payment,

);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);
header("Location: $_SERVER[HTTP_REFERER]");
?>
