<?php
   error_log(implode("|",$_REQUEST));
   foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
      $request = new HttpRequest();
$request->setUrl('https://api.telegram.org/bot937782324:AAFxgtrxcMuHlMMMK0JmT8H8-RnqTwsz7JY/sendMessage');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData(array(
  'chat_id' => '-261885730',
  'text' => 'test'
));

$request->setHeaders(array(
  'Postman-Token' => 'aa9dac93-aaf7-4b2f-94de-66a60b7fc5c9',
  'cache-control' => 'no-cache'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
}
?>

<script>
   
</script>
