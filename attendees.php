<html>
    <head>
        <title>Kenshin's First Birthday</title>
        <style>
            td, th{
                padding: 20px;
            }

            tr:nth-child(even){
                background: #e7e7e7;
            }
        </style>
    </head>
    <body>
        <h1>Guest List</h1>
        <table>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Name
                </th>
                <th>
                    Status
                </th>
                <th>
                    Timestamp
                </th>
            </tr>
            <?php
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                mysql_connect('52.36.211.24:3306', 'meepmerp', 'asd41221650') or die('Cannot Connect to MySQL Server!');
                mysql_select_db('kenshin') or die('Database not Found!');

                $sql = "SELECT * FROM attendees";
                $res = mysql_query($sql) or die('SQL ERRROR!');
                $count=0;
                while($row = mysql_fetch_assoc($res)){
                    $count++;
            ?>
                <tr>
                    <td>
                        <?php echo $count ?>
                    </td>
                    <td>
                        <?php echo ucwords($row['name']); ?>
                    </td>
                    <td>
                        <?php echo ucwords($row['status']); ?>
                    </td>
                    <td>
                        <?php echo date('M d, Y h:i A'); ?>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>
