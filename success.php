<html>
    <head>
        <title>Kenshin's First Birthday</title>
        <style>
            body{
                background: url('img/kenshin.jpg') center center no-repeat;
                background-size: cover;
                height: 100vh;
                width: 100vw;

                margin: 0;
                padding: 0;
                position: relative;
            }

            h1{
                background: url('img/box.png');
                text-align: center;
                position: absolute;
                bottom: 5vh;
                width: 100%;
                color: #fff;
                font-size: 50px;
                padding: 20px 0;
            }
        </style>
    </head>
    <body>
        <?php
            switch($_GET['status']){
                case 'Attending':
                case 'Attending With Plus One':
                    $message = 'SEE YOU THERE!';
                    break;
                case 'Not Sure':
                    $message = 'I HOPE YOU DECIDE TO COME! :)';
                    break;
                case 'Not Going':
                    $message = 'I HOPE YOU\'LL COME ON MY NEXT BIRTHDAY!';
                    break;
            }
        ?>
        <h1><?php echo $message; ?></h1>
    </body>
</html>
