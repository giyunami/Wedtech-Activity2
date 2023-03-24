<?php
 $db = mysqli_connect('localhost', 'root', '@Noraisa1401', 'mm_data', "3307") or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'mm_data' ) or die(mysqli_error($db));
?>