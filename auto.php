<?php
    if(!isset($_SESSION['unqid']))
    {
        echo "
        <script>
        window.location.href = 'login.php'; 
        </script>";
    }
?>