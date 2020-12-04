
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<h4 id="bar">Upload Images in Laravel</h4>

{{-- @if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
    </ul>
</div>
@endif --}}

{!! Form::open(['method'=>'POST', 'action' => 'App\Http\Controllers\ImagesController@store', 'files' => true]) !!}

<div class="form-group">
    {!! Form::label('title', 'Image Title:')!!}
    {!! Form::text('title_image', null, ['class'=>'form-controll'])!!}
</div>
@error('title_image')
    <span style="color:red;">{{$message}}</span>
@enderror
<br>
<div class="form-group">
    {!! Form::label('alt_image', 'Image Description:')!!}
    {!! Form::text('alt_image', null, ['class'=>'form-controll'])!!}
</div>
@error('alt_image')
    <span style="color:red;">{{$message}}</span>
@enderror
<br>
<div class="form-group"> 
    Choose Image
    {!! Form::file('file', ['class'=>'form-controll'], $attributes = ['accept'=>"image/x-png,image/gif,image/jpeg,image/jpg"])!!}
</div>

@error('file')
    <span style="color:red;">{{$message}}</span>
@enderror
<br>
<div class="form-group">
    {!! Form::submit('Save Image', ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}