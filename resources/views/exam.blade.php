<style>


    .is-ebony {
        background-color: #22313f;
    }

</style>

@extends('pages.main')
@section('title','AllPosts')
@section('content')
    <div class="columns is-mobile" style="margin-top: 1%">
        <div class="column is-8 is-offset-2">
            <div class="box">
                <div class="box-content ">
                    <div class="has-text-centered">
                        <P>بسم الله الرحمن الرحيم</P>
                        <P>جامعه السودان للعلوم والتكنولوجا</P>
                        <P>قسم علوم الحاسوب وتقانه المعلومات</P>
                    </div>
                    <div class="has-text-right">
                        <p><b>الاسم:{{\Illuminate\Support\Facades\Auth::user()->name}}</b></p>
                    </div>
                </div>
            </div>
            {!! Form::open(array('route'=>['students.exam.store',$course_id],'data-parsley-validate'=>'','method'=>'POST'))  !!}
            <div class="box">
                <div class="box-content">
                    <div class="text-center">
                        <div class="notification is-ebony">
                            <?php
                            $num = 0;
                            ?>
                            @foreach($exam_questions as $eq)
                                <?php
                                $num += 1;
                                ?>
                                <h1><b>{{$num.'-'.$eq->question_name}}<i class="fas fa-question"></i></b></h1>
                                <ul>
                                    <li>
                                        <label class="radio">
                                            <span><img src="{{asset('img/a.png')}}" width="15" height="15"> </span>
                                            {{$eq->choice_a}}
                                            <input type="radio" name="{{'answer'.$eq->id}}" value="A">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio">
                                            <span><img src="{{asset('img/b.png')}}" width="15" height="15"></span>
                                            {{$eq->choice_b}}
                                            <input type="radio" name="{{'answer'.$eq->id}}" value="B">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio">
                                            <span><img src="{{asset('img/c.png')}}" width="15" height="15"></span>
                                            {{$eq->choice_c}}
                                            <input type="radio" name="{{'answer'.$eq->id}}" value="C">
                                        </label>
                                    </li>

                                    <li>
                                        <label class="radio">
                                            <span><img src="{{asset('img/d.png')}}" width="15" height="15"></span>
                                            {{$eq->choice_d}}
                                            <input type="radio" name="{{'answer'.$eq->id}}" value="D">
                                        </label>
                                    </li>
                                </ul>
                                
                                <hr style="background-color: #2c3e50; height: 0.2%">
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-content">
                    <button class="button is-large is-primary is-fullwidth">حفظ وانهاء</button>
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
@endsection