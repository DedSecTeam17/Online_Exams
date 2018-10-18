
@extends('pages.main')
@section('title','AllPosts')
@section('content')


    <div class="columns is-desktop" style="margin-top: 1%">
        <div class="column is-6 is-offset-3">
            <div class="card">
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <i class="fas fa-user-circle" style="font-size: xx-large"></i>
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                            <p class="subtitle is-6">{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="info-tiles" style="margin-top: 1%">
        <div class="tile is-ancestor has-text-centered">
            @foreach($courses as $course)
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <p class="title">{{$course->name}}</p>

                            @if($course->available==true)
                            <p class="subtitle"> {{'متاح'}}</p>
                        <form method="get" action="{{route('students.exam',$course->id)}}">
                            {{csrf_field()}}
                            <button class="button is-primary">بدء الامتحان</button>
                        </form>

                                @else
                            <p class="subtitle"> {{'غير متاح'}}</p>
                            <i class="fas fa-lock"></i>


                            @endif

                    </article>
                </div>

                @endforeach


        </div>
    </section>

@endsection