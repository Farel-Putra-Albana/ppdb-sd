<?php
    session_start();
    session_destroy();//Penghapusan Sesi
    echo "<script>location='index.php'</script>";//Kembalikan ke halaman index
?>