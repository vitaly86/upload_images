@include('inc.messages')

<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('styles.css')}}">

<h1 style="text-align:center;">View Images</h1> 

<div style="text-align: center;">
    <a href="/create" class="btn btn-primary" style="">Add Photos</a>
 </div><br> 
    @if(count($images) > 0)
        {{-- <div class="container">
            @foreach($images as $image)
                <div class="row">
                    <div class="col-md4">                               
                        <img style="width: 200px;" src="/images/{{$image->image}}" alt="">
                    </div>
                    <div class="col-md8">                              
                        <p>{{$image->title_image}}</p>                           
                    </div>
                </div>
            @endforeach
        </div> --}}
        <div id="container">
            @foreach($images as $image)
                <div class="gallery">                              
                    <img class="carousel" src="/images/{{$image->image}}" alt="{{$image->alt_image}}">                             
                    <div class="desc">{{$image->title_image}}</div>                           
                </div>
            @endforeach
        </div>   
        <div class="bigImage">
            <span id="closebtn">&times;</span>
            @foreach($images as $image)
                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img class="demo" src="/images/{{$image->image}}" alt="{{$image->alt_image}}" width="600" height="400">
                </div>
            @endforeach
            <a id="prev">❮</a>
            <a id="next">❯</a>
            <img id="expandedImg">
            <div id="imgtext"></div>
        </div> 
    @endif

<script src="{{asset('scripts.js')}}"></script>
