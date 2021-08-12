@extends('layout/layout')

@section('content')
<div class="content-box">
    <div class="img-box">
         <img src="{{ $detail['linkToHeaderImage'] }}" alt="">
    </div>
    <div class="text-box">
        <div class="post-detail">
            <a href=""><h6 class="detail">Entertainment</h6></a>
            <h6 class="detail">August 27, 2021</h6>
            <h6 class="detail">null</h6>
        </div>
        
        <a class="title" href=""><h2>{{ $detail['title']}}</h2></a>
        <p class="post-parag">{{$detail['content']}}</p>
        
    </div>
</div>
@endsection
