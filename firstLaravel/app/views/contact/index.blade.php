@extends('../layouts.default')
@section('content')
<div class="container wrapper Tcontain-contact">
 @if (Session::has('success'))
 <?php $message = Session::get('success') ?>
 <div id='success'>
   <h2>{{e($message[0])}}</h2>
   <h4>{{e($message[1])}}</h4>
 </div>
 @endif 
 @if (Session::has('errors'))
 <?php $msgErros = Session::get('errors')->all();?>
 <div class='warningPosition'>
  @foreach ($msgErros as $error)
  <div><h4 class="redWarning">{{$error}}</h4></div>
  @endforeach
  
</div>
@endif
<div class="row">
  <div class="col-lg-8">
    <div class="THeading-black-color">
      <h1>Адрес и телефон</h1>
      <div class="Ttriangle-black-left"></div>
      <div class="Ttriangle-black-right"></div>
    </div>
    <div class="Tposition-address-map">
      <div class="Taddress-info">
        <p>гр.Варна, ул.Прилеп 173, Бизнес център "Бий Гардън" 0888 999 999 </p>
      </div>
      <div id="Tmap">
        <div id="map-container"></div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script
      src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script>
      function init_map() {
        var var_location = new google.maps.LatLng(43.233900, 27.905900);
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
        var var_marker = new google.maps.Marker({
          position: var_location,
          map: var_map,
          title: "Venice"});
        var var_map = new google.maps.Map(document.getElementById("map-container"),
          var_mapoptions);
        var_marker.setMap(var_map);
      }
      google.maps.event.addDomListener(window, 'load', init_map);
      </script>
    </div>
  </div>
  <div class="col-lg-4 ">
    <div class="THeading-blue-color">
      <h1>Връзка с нас</h1>
      <div class="Ttriangle-blue-left"></div>
      <div class="Ttriangle-blue-right"></div>
    </div>
    <div class="Tposition-tel-form">

     {{Form::open(['url'=>'contact','id'=>'form-position'])}}
     {{Form::label('name','Име')}}
     <div class="input-group">
      {{Form::text('name',Input::old('name'),array('class'=>'form-control',
      'required'=>'required' , 'placeholder'=>'Име...'))}}
      <span class="input-group-addon"><i class="glyphicon glyphicon-ok "></i></span>
    </div>
    {{Form::label('email','Поща')}}
    <div class="input-group">
      {{Form::text('email',Input::old('email'),array('class'=>'form-control' , 'required'=>'required' , 'placeholder'=>'Поща...'))}}
      <span class="input-group-addon"><i class="glyphicon glyphicon-ok "></i></span>
    </div>
    {{Form::label('subject','Относно')}}
    <div class="input-group">
      {{Form::text('subject',Input::old('subject'),array('class'=>'form-control' , 'required'=>'required' , 'placeholder'=>'Относно...'))}}
      <span class="input-group-addon"><i class="glyphicon glyphicon-ok "></i></span>
    </div>
    {{Form::label('message','Съобщение')}}
    <div class="input-group">
      {{Form::textarea('message',Input::old('message'),array('class'=>'form-control','maxlength'=>500 , 
      'required'=>'required','rows'=>'8','cols'=>'0'))}}
      <span class="input-group-addon"><i class="glyphicon glyphicon-ok "></i></span>
    </div>
    {{Form::submit('Send' , array ('id'=>'submit' ,'class'=>'btn btn-info pull-right' ))}}
    {{Form::close()}}
    <hr class="featurette-divider hidden-lg">
  </div>
</div>
</div>
</div>
@stop