<?php
   error_log($_REQUEST);
   foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
?>

<script>
   
</script>
