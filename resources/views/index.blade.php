<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Рамки</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Animate style -->
    <link rel="stylesheet" href="{{!App::environment('local')?'/public':''}}/rus/css/animate.min.css">

    <!-- Styles for this template -->
    <link rel="stylesheet" href="{{!App::environment('local')?'/public':''}}/rus/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{!App::environment('local')?'/public':''}}/rus/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="{{!App::environment('local')?'/public':''}}/rus/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="{{!App::environment('local')?'/public':''}}/rus/img/favicon.ico">
</head>
<body>
<!-- ***Page Preloader*** -->
{{--<div id="page-preloader"><span class="spinner"></span></div>--}}

<!-- ***PRESENTATION*** -->
<section id="presentation" class="presentation section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h1>В рамках прекрасного</h1>
                <ul class="check-list list-unstyled">
                    <li><span class="glyphicon glyphicon-ok"></span>Тонкая</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Аккуратная</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Надежная</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Цветная</li>
                </ul>
                <p class="lead">Поспеши украсить свой автомобиль и защитить свой номер по выгодной цене!</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="video-wrap">
                    <video src="{{!App::environment('local')?'/public':''}}/rus/video/RCS.mp4" controls="controls"></video>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //presentation -->

<!-- ***ABOUT*** -->
<section id="about" class="about section">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2 class="page-header">С этой рамкой Вы будете выделяться на дороге<br>
            </h2>
            <div class="col-md-8">
                <div class="main-img"><img src="{{!App::environment('local')?'/public':''}}/rus/img/rcs_main3.png" class="img-responsive" alt=""></div>
            </div>
            <div class="col-md-4 col-xs-12">
                <p>
                    Приятная декоративная рамка. Силиконовая рамка для замены обычной рамки. В качестве
                    преимуществ: уникальный цвет под авто, отсутствие рекламы, защищенность от непогоды и коррозии.
                </p>
                <p>
                    У рамки увеличен силиконовый нахлест, теперь номер не будет выскакивать из рамки. Снизу у рамки есть
                    специальные сливные отверстия для слива воды (во время мойки или дождя). Рамка поставляется в одном
                    из шести вариантов цвета: черный, белый, красный, синий, серый, желтый. Это самые популярные цвета
                    автомобилей, так что Вы без труда сможете подобрать подходящий вариант.
                </p>
                <p>
                    Силиконовая рамка изготовлена из силикона, который не разрушается под воздействием холодов или
                    жары и вообще очень прочный. Номер крепится на специальные болты и вставляется в ободок рамки.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- //about -->

<!-- ***PLUSES*** -->
<section id="pluses" class="pluses section">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2>Преимущества</h2>
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="{{!App::environment('local')?'/public':''}}/rus/img/adv1.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>УДОБНАЯ</span><br>
                    Легко устанавливается и
                    плотно прилегает к
                    корпусу машины.
                </p>
            </div>
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="{{!App::environment('local')?'/public':''}}/rus/img/adv2.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>ТОНКАЯ</span><br>
                    Минималистичный
                    дизайн и аккуратные
                    формы.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="{{!App::environment('local')?'/public':''}}/rus/img/adv3.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>АНТИВАНДАЛЬНАЯ</span><br>
                    Металическая основа и
                    антивандальные винты против
                    злоумышленников.
                </p>
            </div>
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="{{!App::environment('local')?'/public':''}}/rus/img/adv4.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>БЕЗ РЕКЛАМЫ</span><br>
                    Никакого визуального мусора.
                    Акцент только на вашем
                    номере.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="{{!App::environment('local')?'/public':''}}/rus/img/adv5.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>ЦВЕТНАЯ</span><br>
                    Большой выбор цветов
                    под дизайн вашего
                    автомобиля.
                </p>
            </div>
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="{{!App::environment('local')?'/public':''}}/rus/img/adv6.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>НАДЕЖНАЯ</span><br>
                    Оцинкованная основа и силиконовый корпус
                    выдержат любые дорожные и погодные условия.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- //pluses -->

<!-- ***SCRINSHOTS*** -->
<section id="scrinshots" class="scrinshots section">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2>Скриншоты</h2>
            <div class="col-md-6">
                <div class="media">
                    <div class="text-center"><img src="{{!App::environment('local')?'/public':''}}/rus/img/scr1.jpg" alt=""></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media">
                    <div class="text-center"><img src="{{!App::environment('local')?'/public':''}}/rus/img/scr3.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="media">
                    <div class="text-center"><img src="{{!App::environment('local')?'/public':''}}/rus/img/scr4.jpg" alt=""></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media">
                    <div class="text-center"><img src="{{!App::environment('local')?'/public':''}}/rus/img/scr6.jpg" alt=""></div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- //scrinshots -->

<!-- ***REVIEWS*** -->
<section id="reviews" class="reviews section">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2>Отзывы</h2>
            <div class="col-md-6">
                <div class="review-item">
                    <div class="pull-left ava"><img src="{{!App::environment('local')?'/public':''}}/rus/img/ava1.jpg" alt=""></div>
                    <div class="review-body">
                        <blockquote>
                            Актуальная штука, в связи с участившимися кражами госномеров, но...Ну что можно сказать?
                            Сделаны рамки добротно, хорошо и красиво упакованы, без проблем устанавливаются на
                            автомобиль, практически не заметны и не бликуют, вне зависимости от цвета кузова машины.
                        </blockquote>
                        <p class="text-muted">Андрей И.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="review-item">
                    <div class="pull-left ava"><img src="{{!App::environment('local')?'/public':''}}/rus/img/ava2.jpg" alt=""></div>
                    <div class="review-body">
                        <blockquote>
                            Муж подарил мне автомобиль на день рождения, и меня сразу начала раздражать рамка на
                            номерном знаке – с рекламой автоцентра. Поэтому я заказала рамку от RCS. Оказалось то, что
                            надо – никакого мусора, и выбранный цвет – красный – идеально вписался в расцветку моего
                            авто. Красота!
                        </blockquote>
                        <p class="text-muted">Ирина Б.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <div class="review-item">
                    <div class="pull-left ava"><img src="{{!App::environment('local')?'/public':''}}/rus/img/ava3.jpg" alt=""></div>
                    <div class="review-body">
                        <blockquote>
                            В том году у меня украли автомобильный номер. Пришлось заплатить воришкам за возврат…
                            Заказал сразу же рамку RCS – ее шпилькой точно не открутишь – антивандальные винты, стальная
                            основа, силиконовый корпус. Теперь спокоен! И дороги наши выдержит, и злоумышленникам шансов
                            не оставит.
                        </blockquote>
                        <p class="text-muted">Константин С.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="review-item">
                    <div class="pull-left ava"><img src="{{!App::environment('local')?'/public':''}}/rus/img/ava4.jpg" alt=""></div>
                    <div class="review-body">
                        <blockquote>
                            У меня свой бизнес, и обращать внимание на детали - моя привычка. Рамка от RCS нравится
                            своим лаконичным дизайном - стильно, аккуратно. Видно, что не кустарная работа. Заказал
                            доставку курьером, а установил сам - дело 5 минут, все винты и саморез уже включены в
                            комплект. В общем, я доволен. Рекомендую!
                        </blockquote>
                        <p class="text-muted">Сергей И.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //reviews -->

<!-- ***BUY IT NOW*** -->
<section id="buy" class="buy section">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2>Оформить заказ<br>
                <small>просто, быстро, удобно...</small>
            </h2>
            {{--<p class="lead text-center">Расскажите о способах оплаты, доставки, о гарантиях и т.д.</p>--}}
            <!--standart-->
            <div class="col-md-4 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>Черная<br><span>1500 руб.</span></h3>
                    </div>
                    <div class="body">
                        <img src="{{!App::environment('local')?'/public':''}}/rus/img/ramka_black.png" alt="">
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="Черная">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Заказать
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>Синяя<br><span>1500 руб.</span></h3>
                    </div>
                    <div class="body">
                        <img src="{{!App::environment('local')?'/public':''}}/rus/img/ramka_blue.png" alt="">
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="Синяя">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Заказать
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>Серая<br><span>1500 руб.</span></h3>
                    </div>
                    <div class="body">
                        <img src="{{!App::environment('local')?'/public':''}}/rus/img/ramka_gray.png" alt="">
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="Серая">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Заказать
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>Красная<br><span>1500 руб.</span></h3>
                    </div>
                    <div class="body">
                        <img src="{{!App::environment('local')?'/public':''}}/rus/img/ramka_red.png" alt="">
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="Красная">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Заказать
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>белая<br><span>1500 руб.</span></h3>
                    </div>
                    <div class="body">
                        <img src="{{!App::environment('local')?'/public':''}}/rus/img/ramka_white.png" alt="">
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="Белая">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Заказать
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>Желтая<br><span>1500 руб.</span></h3>
                    </div>
                    <div class="body">
                        <img src="{{!App::environment('local')?'/public':''}}/rus/img/ramka_yellow.png" alt="">
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="Желтая">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            Заказать
                        </button>
                    </div>
                </div>
            </div>

            {{--<!--premium-->--}}
            {{--<div class="col-md-4 col-xs-12">--}}
                {{--<div class="price premium">--}}
                    {{--<div class="head">--}}
                        {{--<h3>Премиум<br><span>150 руб.</span></h3>--}}
                    {{--</div>--}}
                    {{--<div class="body">--}}
                        {{--<ol>--}}
                            {{--<li>Porro officia cumque sint deleniti;</li>--}}
                            {{--<li>Тemo facere rem vitae odit;</li>--}}
                            {{--<li>Cum odio, iste quia doloribus autem;</li>--}}
                            {{--<li>Porro officia cumque sint deleniti;</li>--}}
                            {{--<li>Тemo facere rem vitae odit;</li>--}}
                        {{--</ol>--}}
                        {{--<a href="" class="btn btn-block btn-default"><span--}}
                                    {{--class="glyphicon glyphicon-shopping-cart"></span> Заказать</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!--lux-->--}}
            {{--<div class="col-md-4 col-xs-12">--}}
                {{--<div class="price lux">--}}
                    {{--<div class="head">--}}
                        {{--<h3>Люкс<br><span>200 руб.</span></h3>--}}
                    {{--</div>--}}
                    {{--<div class="body">--}}
                        {{--<ol>--}}
                            {{--<li>Porro officia cumque sint deleniti;</li>--}}
                            {{--<li>Тemo facere rem vitae odit;</li>--}}
                            {{--<li>Cum odio, iste quia doloribus autem;</li>--}}
                            {{--<li>Porro officia cumque sint deleniti;</li>--}}
                            {{--<li>Тemo facere rem vitae odit;</li>--}}
                            {{--<li>Cum odio, iste quia doloribus autem;</li>--}}
                            {{--<li>Porro officia cumque sint deleniti;</li>--}}
                        {{--</ol>--}}
                        {{--<a href="" class="btn btn-block btn-default"><span--}}
                                    {{--class="glyphicon glyphicon-shopping-cart"></span> Заказать</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>
<!-- //buy it now -->

<!-- ***SUBSCRIBE*** -->
<section id="subscribe" class="subscribe section">
    <div class="container">
        <!-- row -->
        <div class="text-center row">
            <h2>Не пропустите выгодные акции и предложения!<br>Подпишитесь на новости:</h2>
            <p class="lead">Никакого спама, мы гарантируем!</p>
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <!-- Subscribe form -->
                <form role="form" class="form-inline subscribe-form">
                    <div class="form-group"><input id="subs_email" class="form-control email-mask"
                                                   placeholder="Ваш email:"></div>
                    <div class="form-group">
                        <button id="subs_btn" class="btn btn-danger">Подписаться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- //subscribe -->

<!-- ***CONTACTS*** -->
<section id="contacts" class="contacts section">
    <div class="container">
        <!-- row -->
        <div class="text-center row">
            <h2>Контакты</h2>
            <p class="lead">Если у вас возникли вопросы, то вы сможете задать их, заполнив форму ниже, или
                воспользовавшись контактами ниже.</p>
            <div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12">
                <!-- Contacts form -->
                <form role="form" class="contacts-form">
                    <div class="form-group">
                        <input id="name" class="form-control" placeholder="Ваше имя:">
                    </div>
                    <div class="form-group">
                        <input id="email" class="form-control email-mask" placeholder="Ваш email:">
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="form-control" rows="5" placeholder="Ваше сообщение:"></textarea>
                    </div>
                    <div class="form-group">
                        <button id="btn" class="btn btn-default" >Отправить</button>
                    </div>
                </form>
                <br>
                <!-- Address -->
                {{--<div class="col-md-6 col-xs-6 col-sm-6 text-right">--}}
                    {{--<address>--}}
                        {{--<strong>Адрес:</strong><br>--}}
                        {{--Москва<br>--}}
                        {{--<abbr title="Телефон">Т:</abbr> +7 (913) 333-3308--}}
                    {{--</address>--}}
                {{--</div>--}}
                <!-- Contacts -->
                <div class=" col-xs-12 text-center">
                    <address>
                        <strong>Другие контакты:</strong><br>
                        <abbr title="Email">E:</abbr> <a href="mailto:#">support@my-ramka.ru</a><br>
                        {{--<abbr title="Skype">S:</abbr> <a href="skype:#">login_skype</a><br>--}}
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->

<div class="back-top" id="back-top">
    <a href="#" class="btn btn-block btn-lg btn-danger">Наверх</a>
</div>

<!-- ***FOOTER*** -->
<footer class="footer">
    <div class="container">
        <!-- row -->
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <br>
                <!-- Social icons -->
                <p class="social-icons">
                    <a href=""><i class="ico">f</i></a>
                    <a href=""><i class="ico">t</i></a>
                    <a href=""><i class="ico">g</i></a>
                    <a href=""><i class="ico">v</i></a>
                </p>
                <br>
                <p class="text-center">Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} Рамки · <a href="">Рамки</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->

<!-- ***MODAL*** -->
<div class="modal fade" id="basket" tabindex="-1" role="dialog" aria-labelledby="basketLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
            </div>
            <form class="form-horizontal">

                <div class="modal-body">
                    <div class="order">
                        Ваш заказ: рамка RCS
                    </div>
                    <div class="count">
                        <div class="form-group">
                            <label for="count" class="col-sm-2 control-label">Количество</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="count" placeholder="Количество" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="fio">
                        <div class="form-group">
                            <label for="lastName" class="col-sm-2 control-label">Фамилия</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="lastName" placeholder="Фамилия">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstName" class="col-sm-2 control-label">Имя</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="firstName" placeholder="Имя">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Телефон</label>
                            <div class="col-sm-10">
                                <input class="form-control phone-mask" id="phone" placeholder="Телефон">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Отправить заказ</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- //modal -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{!App::environment('local')?'/public':''}}/rus/js/jquery.inview.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/rus/js/detectmobilebrowser.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/rus/js/jquery.placeholder.js"></script>
<script src="/js/inputmask/dist/inputmask/inputmask.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/js/inputmask/dist/inputmask/inputmask.extensions.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/js/inputmask/dist/inputmask/inputmask.numeric.extensions.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/js/inputmask/dist/inputmask/inputmask.date.extensions.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/js/inputmask/dist/inputmask/inputmask.phone.extensions.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/js/inputmask/dist/inputmask/jquery.inputmask.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/js/inputmask/dist/inputmask/phone-codes/phone.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/js/inputmask/dist/inputmask/phone-codes/phone-be.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/js/inputmask/dist/inputmask/phone-codes/phone-ru.js"></script>
<script src="{{!App::environment('local')?'/public':''}}/rus/js/js.js"></script>
<script>
    $(window).on('load', function () {
        var $preloader = $('#page-preloader'),
            $spinner = $preloader.find('.spinner');
        $spinner.fadeOut();
        $preloader.delay(350).fadeOut('slow');
    });
</script>
<!--[if !IE]>-->
<script src="{{!App::environment('local')?'/public':''}}/rus/js/animate.js"></script>
<!--<![endif]-->
</body>
</html>