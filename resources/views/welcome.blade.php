<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    </head>
    <body class="antialiased">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <x-layout>
            <div class="container">
            @auth
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <a href="{{route('work.with.us')}}"><button class="btn btn-primary btn-block" >Work With Us</button></a>
                    </div>
                </div>
            @endauth
                <div class="row">
                    @foreach($articles as $article)
                    <div class="card" style="width:18rem">
                        <img src="{{Storage::url($article->img)}}" alt="{{$article->title}}" srcset="" class="card-img-top">
                        <div class="card-body">
                            <h5>{{$article->title}}</h5>
                            <p class="card-text">{{substr($article->description,0,20)}}</p>
                            <a href="{{route('articles.category',$article->category)}}" class="card-text">{{$article->category->name}}</a>
                            <a href="{{route('articles.show',$article)}}" class="btn btn-primary">Leggi</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </x-layout>
    </body>
</html>
