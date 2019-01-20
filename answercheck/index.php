<!DOCTYPE html>
<html>
    <head>
        <title>2BSTAFF-AnswerCheck</title>
        <meta charset="utf-8">
        <link rel="icon" href="https://2bkmutt.com/assets/img/2blogo.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Kanit|Sarabun" rel="stylesheet">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    </head>
    <body>
        <?php
            require_once('./auth/auth.database.php');
            require_once('./class/loginClass.php');
            require_once('./action/login.action.php');
        ?>
        <div id="app">
            <div class="container animated bounceInDown">
                <div class="row">
                        
                <?php
                    if(empty($_SESSION['user']) && empty($_SESSION['time'])){
                        require_once ('./views/login.page.php');
                    }else{
                        if(!empty($_SESSION['user'])){
                        require_once ('./route/route.php');
                         }
                    }
                ?>
                            
                      
            </div>
        </div>
        <center>
        <div style="text-align: center;" class="animated bounceInDown">
            <div style="color: #fff;font-size: 14px;"><b>© 2019 2B-KMUTT. </b>All Rights Reserved.<br>
                <div style="color:#fff;font-size: 12px;">Improvement by <b>Waranat.S</b> Template by <b>Chanan.S</b></div>
            </div>
            <br>
            <br>
            </center>
        </body>
    </html>