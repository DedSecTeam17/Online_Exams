
@extends('pages.main')
@section('title','AllPosts')
@section('content')
    <div class="columns is-desktop">
        <div class="column is-8 is-offset-2">
            <section class="hero is-info welcome is-small" style="margin-top: 1%">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            Hello, Admin.
                        </h1>
                        <h2 class="subtitle">
                            I hope you are having a great day!
                        </h2>
                    </div>
                </div>
            </section>
            <section class="info-tiles" style="margin-top: 1%">
                <div class="tile is-ancestor has-text-centered">
                    <div class="tile is-parent ">
                        <article class="tile is-child box is-info">
                            <p class="title">{{$students->count()}}</p>
                            <p class="subtitle">طالب</p>
                        </article>
                    </div>
                    <div class="tile is-parent ">
                        <article class="tile is-child box">
                            <p class="title">{{$courses->count()}}</p>
                            <p class="subtitle">كورس</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{$results->count()}}</p>
                            <p class="subtitle">نتائج</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{$questions->count()}}</p>
                            <p class="subtitle">اسئله</p>
                        </article>
                    </div>
                </div>
            </section>

        </div>



    </div>


@endsection