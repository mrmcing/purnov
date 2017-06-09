<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>Марафон</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap -->
    <link href="js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

<section class="preview">

    <div class="img-graph-wrapper chart" style="width: 0px;">
        <img src="img/icon/bars.png" alt="" class="reletive">
    </div>

    <div class="top-line">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item hidden-xs">
                    <a class="nav-phone" href="tel:+74996772081"><i class="fa fa-phone" aria-hidden="true"></i>  +7 (499) 6772081</a>
                </li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <a class="brand" href="http://purnov.com/" target="_blank">alexander<span class="text-gold">purnov</span></a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p class="tagline">...сегодня я торгую лучше, чем вчера</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>марафон «я покупаю ваши знания»</h1>
                <p class="sub-title">призовой фонд - от 4000 до 52000 руб</p>
            </div>
            <div class="col-xs-12 text-center">
                <div class="arrow"></div>
            </div>
            <div class="col-xs-12">
                <div class="box-form">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="sr-only" for="login">Логин...</label>
                                <input type="text" class="form-control" name="login" id="login" placeholder="Логин..." required="">
                            </div>
                            <div class="col-md-4">
                                <label class="sr-only" for="password">Пароль...</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Пароль..." required="">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn">учавствовать</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="js/common.js"></script>


<!-- Начало. Подключение скриптов в футер. -->
<?// include $_SERVER['DOCUMENT_ROOT']."/class/footer_script.php";
//$foother_object = new foother_object();
//echo $foother_object->trimodal,
//$foother_object->google_analytics,
//$foother_object->jivosite,
//$foother_object->zadarma;
//?>
<!-- Конец. Подключение скриптов в футер. -->

</body>
</html>