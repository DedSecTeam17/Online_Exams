
@extends('pages.main')
@section('title','AllPosts')
@section('content')
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
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <p class="title">439k</p>
                    <p class="subtitle">Students</p>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <p class="title">59k</p>
                    <p class="subtitle">Course</p>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <p class="title">3.4k</p>
                    <p class="subtitle">Result</p>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <p class="title">19</p>
                    <p class="subtitle">Questions</p>
                </article>
            </div>
        </div>
    </section>

@endsection