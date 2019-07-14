<script>
    history.pushState("null","null",document.title);
    window.addEventListener('popstate',function(){
        history.pushState("null","null",document.title);
    })
</script>



<?php
session_start();
session_unset();
$_SESSION=array();
session_destroy();
include 'index.php';
?>
