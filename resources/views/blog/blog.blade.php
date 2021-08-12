@extends('layout/layout')

@section('content')
    
    <div class="content-box">
        @foreach ($detail as $item)
        <div class="img-box">
            <img src="{{ $item['linkToHeaderImage'] }}" alt="">
        </div>
        <div class="text-box">
            <div class="post-detail">
                <a href=""><h6 class="detail">Entertainment</h6></a>
                <h6 class="detail">August 27, 2021</h6>
                <h6 class="detail">{{ $item['createdBy']}}</h6>
            </div>
            
            <a class="title" href=""><h2>{{ $item['title'] }}</h2></a>
            <p>{{$item['content']}}</p>
            <a class="button" href="{{ route('blog.blog-post', ['id' => $item['id']])}}">Read More</a>
        </div>
        @endforeach
    </div>
    
@endsection
