@extends('../layouts.default')

@section('content')
@include ('../layouts.press')
<div class="col-lg-10">
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Уважаеми клиенти, с цел по-бързо и прецизно изпълнение на вашата поръчка, бихме искали да ви
                        запознаем с изискванията за широкоформатен печат.</h3>

                    <div>Color mode: CMYK</div>
                    <div>File type:</div>
                    <ul>
                        <li><b>TIFF</b> <em>(файловете не трябва да съдържат пътища и маски, да са записани в LZW
                                компресия)</em></li>
                        <li><b>CDR или EPS </b> <em>(всички текстове да бъдат в криви)</em></li>
                        <li><b>PDF</b></li>
                    </ul>
                    <p>
                    <div>
                        <span>При файлове в мащаб 1:1 – 30 до 100 dpi</span>
                    </div>
                    <div>
                        <span>При файлове в мащаб 1:10 – минимум 300 dpi</span>
                    </div>
                    </p>
                    <p>При проектирането на стандартен билборд тип „Пиза“ 4х3 всички текстове трябва да са на отстояние
                        15 см навътре от краищата на винила.</p>

                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    <a href="/services">Go Back</a>
</div>
</div>
@stop

