
@extends('layouts.default')
@section('content')
<div class="container wrapper Tcontain-contact">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!--<ol class="carousel-indicators">-->
        <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
        <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
        <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
        <!--</ol>-->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" id="Timage-size">
            <div class="item active">
                <img src="img/homepage-img/1-img.png" alt="...">

                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="img/homepage-img/2-img.png" alt="...">

                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="img/homepage-img/3-img.png" alt="...">

                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/homepage-img/4-img.png" alt="...">

                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/homepage-img/5-img.png" alt="...">

                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/homepage-img/6-img.png" alt="...">

                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <!-- Controls -->
        <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
        <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
        <!--</a>-->
        <!--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
        <!--<span class="glyphicon glyphicon-chevron-right"></span>-->
        <!--</a>-->
    </div>
    <div class="row">
        <div class="col-lg-4 Tmargin-top">
            <div class="Tsection-bgc">
                <div class="THeading-blue-color">
                    <h1>За нас</h1>

                    <div class="Ttriangle-blue-left"></div>
                    <div class="Ttriangle-blue-right"></div>
                </div>
            </div>
            <div class="Tposition">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, beatae dignissimos
                    distinctio magni
                    odit quis voluptates? Accusantium, adipisci cupiditate delectus, dolore, eius excepturi
                    labore molestiae
                    necessitatibus quas quisquam repellendus ullam.</p>
                <a class="btn btn-primary" href="/about" role="button">Още</a>
            </div>
        </div>
        <div class="col-lg-4 Tmargin-top">
            <div class="Tsection-bgc">
                <div class="THeading-blue-color">
                    <h1>Услуги</h1>

                    <div class="Ttriangle-blue-left"></div>
                    <div class="Ttriangle-blue-right"></div>
                </div>
            </div>
            <div class="Tposition">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, beatae dignissimos
                    distinctio magni
                    odit quis voluptates? Accusantium, adipisci cupiditate delectus, dolore, eius excepturi
                    labore molestiae
                    necessitatibus quas quisquam repellendus ullam.</p>
                <a class="btn btn-primary" href="/services" role="button">Още</a>
            </div>


        </div>
        <div class="col-lg-4 Tmargin-top ">
            <div class="Tcontact-hp">
                <div id="test">
                    <div id="Tcontact-position">
                        <p>

                        <h2>Връзка с нас</h2>
                        <span>Телефон:</span>
                        </p>

                        <p>

                        <div>0888/222-555</div>
                        <span>Имейл:</span>
                        </p>

                        <p>

                        <div><a href="mailto:alabala@ala.com">alabala@ala.com</a></div>
                        <span>Последвайте ни:</span>
                        </p>


                        <p>

                        <div>
                            <ul class="list-inline">
                                <li><a href="https://www.facebook.com/MediaVarna?fref=ts" target="_blank">
                                        <i class="fa fa-facebook fa- icon-colors "></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter icon-colors "></i> </a></li>
                                <li><a href="#"><i class="fa fa-linkedin icon-colors "></i> </a></li>
                                <li><a href="#"><i class="fa fa-skype icon-colors "></i> </a></li>
                            </ul>

                        </div>
                        </p>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-8 Tmargin-top">
            <div class="Tsection-bgc">
                <div class="THeading-blue-color">
                    <h1>Новини & Публикации</h1>

                    <div class="Ttriangle-blue-left"></div>
                    <div class="Ttriangle-blue-right"></div>
                </div>
            </div>

            <div class="Tposition-section">
                <section>
                   <?php foreach($news as $msg):?>
                    <div class="row">
                        <article>
                            <div class="col-lg-4 TpicSize">
                                <img src="<?= $msg->images ?>">
                            </div>
                            <div class="col-lg-8 TinfoSize">
                                <div>
                                    <b><?= $msg->author?></b>
                                </div>
                                <div>
                                    <?= $msg->context;  ?>
                                </div>
                                <div>
                                   <small>Публикувано: <?= date("d-m-Y",strtotime($msg->date));?></small>
                                </div>
                                <div>
                                    <a href="#">ПОЧЕТИ ОЩЕ...</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php endforeach;?>
                    <div class="row">
                        <article>
                            <div class="col-lg-4">
                                <img src="img/section-2.JPG">
                            </div>
                            <div class="col-lg-8">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A beatae
                                        cum doloribus
                                        expedita
                                        quisquam
                                        vitae? Accusantium alias architecto dicta, doloribus explicabo impedit magni nam
                                        nulla
                                        numquam
                                        obcaecati odio soluta tenetur?

                                    </p>
                                </div>
                                <div>
                                    <a href="#">ПОЧЕТИ ОЩЕ...</a>
                                </div>
                            </div>


                        </article>
                    </div>
                </section>
            </div>

        </div>
        <div class="col-lg-4 Tmargin-top">
            <div class="Tsection-bgc">
                <div class="THeading-blue-color">
                    <h1>Партньори</h1>

                    <div class="Ttriangle-blue-left"></div>
                    <div class="Ttriangle-blue-right"></div>
                </div>

            </div>
            <div id="partners">

                <div id="carousel-example-generic " class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <!--<ol class="carousel-indicators">-->
                    <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
                    <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
                    <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
                    <!--</ol>-->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" id="partners-logo">
                        <div class="item active">
                            <img src="img/1.jpg" alt="...">

                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <img src="img/2.jpg" alt="...">

                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <img src="img/3.jpg" alt="...">

                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
                    <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
                    <!--</a>-->
                    <!--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
                    <!--<span class="glyphicon glyphicon-chevron-right"></span>-->
                    <!--</a>-->
                </div>

            </div>

        </div>
    </div>
    </div>
@stop
