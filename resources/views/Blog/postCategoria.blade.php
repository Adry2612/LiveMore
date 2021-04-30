@extends('layouts.maestro')
    @section('css', asset("css/postCategoria.css"))

    @section('contenido')
        <div class="categoria">
            <div class="title">
                <h1> {{$categoria -> name}} </h1>
                <span> </span>
            </div>

            <div class="posts">
                @foreach ($postCategoria as $post)
                    @if ($loop->first || $loop->index == 2)
                            <div class="principales">
                                    <div class="content">
                                        <h1> {{$post->title}} </h1>
                                        <h2> {{$post->brief}}</h2>
                                        <h3> {{$post->user->name}} {{$post->user->surname}} </h3>
                                    </div>
                                <img src="http://localhost/livemore/storage/{{$post->images[0]->url}}" alt="">
                            </div>

                    @elseif ($loop->index==3)
                        <div class="grid">

                        </div>
                    @endif
                @endforeach


                @foreach ($postCategoria as $post)
                    @if ($loop->index > 2)
                        <div class="post">
                            <img src="http://localhost/livemore/storage/{{$post->images[0]->url}}" alt="{{$post->title}}">
                            <h3> {{$post->title}}</h3>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @stop