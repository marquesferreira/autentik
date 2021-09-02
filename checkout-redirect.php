<?php
//ARQUIVO DEVE SER COLOCADO NA RAIZ DO SITE
$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>

<script>
    setTimeout(function() {
        window.location.href = "/finalizar-compra/";
    }, 3000);
</script>