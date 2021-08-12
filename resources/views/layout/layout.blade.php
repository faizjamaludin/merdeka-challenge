<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <title>Cyberjaya.</title>
</head>
<body>
    <section>
        <header>
           <a href="{{ route('index') }}" class="logo">Cyberjaya<span class="dot">.</span></a>
           <ul class="nav">
               <li><a href="{{ route('index') }}" class="active">Blog</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Contact</a></li>
           </ul>
        </header>
       <div class="content">
           @yield('content')
       </div>
       <footer>
           <p>&copy; 2021 SoftwareQ Merdeka Challenge</p>
       </footer>
    </section>
</body>
</html>
{{-- <img src="{{asset('img/tunku-abdul-rahman.png')}}" alt=""> --}}