<?php
    mysql_connect('52.36.211.24:3306', 'meepmerp', 'asd41221650') or die('Cannot Connect to MySQL Server!');
    mysql_select_db('kenshin') or die('Database not Found!');

    $sql = "INSERT INTO attendees VALUES(null, '{$_POST['name']}', '{$_POST['status']}', '".time()."')";

    mysql_query($sql) or die('SQL ERROR!');

    header('location:success.php?status=' . $_POST['status']);
?>
