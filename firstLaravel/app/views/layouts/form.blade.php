
<p>I AM register</p>
{{Form::open(['url'=>'/user'])}}
<div>
    {{Form::label('email')}}
    {{Form::text('email',Input::old('email'))}}
    {{$errors->first('email')}}
</div>
<div>
    {{Form::label('pass1','password')}}
    {{Form::password('pass1',array('class'=>'password','id'=>'pass1'))}}
    {{$errors->first('pass1')}}
</div>
<div>
    {{Form::label('pass2','Repeat password',array('class'=>'gnida'))}}
    {{Form::password('pass2',array('class'=>'password','id'=>'pass2'))}}
    {{$errors->first('pass2')}}
</div>
<div>
    {{Form::submit('Register')}}
</div>
{{Form::close()}}
