<?php
    mysql_connect('52.36.211.24:3306', 'meepmerp', 'asd41221650') or die('Cannot Connect to MySQL Server!');
    mysql_select_db('kenshin') or die('Database not Found!');

    if($_POST['attend'] == 'Alone'){
        $sql = "INSERT INTO attendees VALUES(null, '{$_POST['name']}', 'No Plus One', ".time().")";
    }
    else{
        $sql = "INSERT INTO attendees VALUES(null, '{$_POST['name']}', 'With Plus One', ".time().")";
    }

    mysql_query($sql) or die('SQL ERROR!');

    header('location:success.html');
?>
