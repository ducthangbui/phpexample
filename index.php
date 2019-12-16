<?php
   
?>

<script>
   print_r($_REQUEST);
   foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
</script>
