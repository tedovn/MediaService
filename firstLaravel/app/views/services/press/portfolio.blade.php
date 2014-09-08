@extends('../layouts.default')

@section('content')
@include ('../layouts.press')
<?php 
;
?>
<div class="col-lg-10">
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">

            @foreach ($gallerys as $key => $image ) 
            <div class="col-lg-3 col-md-4 col-xs-12 col-sm-6">
               <div class="gallery-image-position">
                  <a href="/img/press/portfolio/{{{$image}}}.jpg" alt ={{{$image}}} class="popup_gallery">
                    <img src="/img/press/portfolio/portfolio-small/{{{$key}}}.png" alt="{{{$key}}}"></a>
                </div>
            </div>
            @endforeach
 

        </div>
    </div>
    <!-- /#page-content-wrapper -->
    <div class=row>
        <div class="col-lg-12"><a href="/services">Go Back</a> </div>
    </div>
</div>
</div>
@stop

