<?php
   error_log(implode("|",$_REQUEST));
   print_r('1\n');
   print_r($_REQUEST);
   print_r('2\n');
   print_r($_GET);
   print_r('3\n');
   print_r($_POST);
   print_r('4\n');
   print_r(json_encode($_REQUEST));
   print_r('5\n');
   print_r(json_encode($_GET));
   print_r('6\n');
   print_r(json_encode($_POST));

   $data = json_encode($_REQUEST);
   print_r($data);
    // Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.telegram.org/bot937782324:AAFxgtrxcMuHlMMMK0JmT8H8-RnqTwsz7JY/sendMessage?chat_id=-261885730&text=' . $data
]);
// Send the request & save response to $resp
//$resp = curl_exec($curl);
// Close request to clear up some resources
//curl_close($curl);
?>

<script>
   
</script>
