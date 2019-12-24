<?php
   error_log(implode("|",$_REQUEST));
   print_r('<br />1<br />');
   print_r($_REQUEST);
   print_r('<br />2<br />');
   print_r($_GET);
   print_r('<br />3<br />');
   print_r($_POST);
   print_r('<br />4<br />');
   print_r(json_encode($_REQUEST));
   print_r('<br />5<br />');
   print_r(json_encode($_GET));
   print_r('<br />6<br />');
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
