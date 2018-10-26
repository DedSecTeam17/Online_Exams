@extends('pages.main')
@section('title','AllPosts')
@section('content')
    <div class="columns is-mobile" style="margin-top: 1%">
        <div class="column is-6 is-offset-3">
            <div class="box">
                <div class="box-content">
                    <div class="text-center">
                        <i class="fas fa-trophy" style="font-size: xx-large; color: gold"></i>
                        {{$result->result.'/'.$result->full_mark }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection