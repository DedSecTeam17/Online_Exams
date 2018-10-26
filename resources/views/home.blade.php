@extends('pages.main')
@section('title','AllPosts')
@section('content')


    <div class="columns is-desktop" style="margin-top: 1%">
        <div class="column is-6 is-offset-3">
            <div class="card">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-4">{{\Illuminate\Support\Facades\Auth::user()->name}}
                            </p>
                            <p class="subtitle is-6">{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                        </div>
                        <div class="media-right">
                            <figure class="image is-48x48">
                                <i class="fas fa-user-circle" style="font-size: xx-large"></i>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr style="background-color: gray; height: 0.1%">
    <div class="columns is-multiline is-desktop">
        @foreach($courses as $course)
            <div class="column is-4 ">
                <div class="box">
                    <div class="box-content">
                        <div class="has-text-centered">
                            <img src="{{asset('img/book.png')}}">
                        </div>
                        <hr>
                        <p class="has-text-centered title">{{$course->name}}</p>
                        @if($course->available==true and $course->questions->count()>0)
                            <p class="has-text-centered"> {{'متاح'}}</p>
                            <form method="get" action="{{route('students.exam',$course->id)}}">
                                {{csrf_field()}}
                                <hr>
                                <button class="button is-primary is-fullwidth">بدء الامتحان</button>
                            </form>
                        @else
                            <p class="subtitle has-text-centered"> {{'غير متاح'}}</p>
                            <div class="has-text-centered">
                                <i class="fas fa-lock "></i>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection