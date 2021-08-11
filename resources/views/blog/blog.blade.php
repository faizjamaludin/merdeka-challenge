@extends('layout/layout')

@section('content')
<div class="content-box">
    <div class="img-box">
         <img src="{{asset('img/test2.jpeg')}}" alt="">
    </div>
    <div class="text-box">
        <div class="post-detail">
            <a href=""><h6 class="detail">Entertainment</h6></a>
            <h6 class="detail">August 27, 2021</h6>
            <h6 class="detail">null</h6>
        </div>
        
        <a class="title" href=""><h2>Example Post1</h2></a>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum debitis doloremque 
            architecto excepturi deleniti voluptate consectetur iure nulla omnis. Esse perferendis 
            animi aliquid doloremque corporis accusamus aspernatur amet repudiandae officia? 
            Blanditiis cupiditate inventore odit assumenda aspernatur nesciunt facere, voluptatem 
            incidunt. Porro officia quam facere soluta expedita tenetur architecto, cupiditate omnis.</p>
        <a class="button" href="">Read More</a>
    </div>
</div>
@endsection
