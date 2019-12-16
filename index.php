<?php
   error_log(implode("|",$_REQUEST));
   foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
?>

<script>
   
</script>
