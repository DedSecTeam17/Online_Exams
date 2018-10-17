@extends('pages.main')
@section('title','| show your post')
@section('content')
<div class="columns is-mobile" style="margin-top: 5%">
    <div class="column is-half">
        <div class="card ">
            <div class="card-header title">
                <h5 style="margin: 4%"> {{$post->title}}</h5>
            </div>
            <div class="card-image" >
                <figure>
                    <img src="{{asset('img/'.$post->image)}}" class="img-fluid img-thumbnail">
                </figure>
            </div>
            <div class="card-content">
                <h4>{!!$post->body!!}</h4>
            </div>
        </div>
        <hr/>
        <div>
            <div class="box">
                <div class="box-content">
                    <p>all association tags </p>
                    @foreach($post->tags as $tag)
                    <div class="tag is-success">
                        <p>{{$tag->name}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="column is-half">
        <div class="box">
            <div class="box-content">
                <p><b>Category :</b> {{$post->category->name }} </p>
                <p><b>Slug Url:</b> at <a href="{{url('blog/'.$post->slug)}}">{{ url('blog/'.$post->slug)  }} </a>
            </p>
            <div class="dl-horizontal">
                <p><b>Created</b> at {{ date('Y-M-W-D',strtotime($post->created_at)) }} </p>
                <p><b>Updated</b> at {{date('Y-M-W-D',strtotime(  $post->updated_at)) }} </p>
                {!! Html::linkRoute('posts.edit','Update',array($post->id),array("class"=>"button is-success is-fullwidth is-outlined")) !!}<br>
                {!! Html::linkRoute('posts.index','Show All Posts',[],array("class"=>"button is-dark is-fullwidth is-outlined  ")) !!}<br>
                {!!  Form::open( array('route' => array('posts.destroy', $post->id), 'files' => true, 'method' => 'DELETE')) !!}<br>
                {!! Form::submit('Delete',["class"=>"button is-danger is-fullwidth is-outlined  "]) !!}
                {{--{!! Html::linkRoute('posts.destroy','Delete',array($post->id),array("class"=>"button button-danger")) !!}--}}
                {!! Form::close() !!}
                {{--<button type="button" class="button button-success ">Edit</button>--}}
                {{--<button type="button" class="button button-danger">delete</button>--}}
            </div>
        </div>
    </div>
</div>
</div>
<div class="columns is-mobile">
<div class="column ">
    <div style="  overflow-x: auto;">
        <table class="table  " >
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>comment</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($post->comments as $comment)
                <tr>
                    <td>{{$comment->id }}</td>
                    <td>{{substr($comment->name,0,10)}}</td>
                    <td>{{substr($comment->email,0,10)}}</td>
                    <td>{!!substr($comment->comment_body,0,10)  !!}</td>
                    {{--<td><a href="{{route('comments.destroy',$comment->id)}}" class="button button-xs button-danger"><i class="fas fa-trash"></i></a></td>--}}
                    <td>
                        {!!  Form::open( array('route' => array('comments.destroy', $comment->id), 'files' => true, 'method' => 'DELETE')) !!}
                        {!! Form::submit('Delete',["class"=>"button is-danger is-fullwidth is-rounded is-outlined"]) !!}
                        {{--{!! Html::linkRoute('posts.destroy','Delete',array($post->id),array("class"=>"button button-danger")) !!}--}}
                        {!! Form::close() !!}
                    {{--</td>--}}
                    {{--<td><a href="{{route('comments.edit',$comment->id)}}" class="button button-xs button-dark"><i--}}
                    {{--class="fas fa-pen-square"></i></a></td>--}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection