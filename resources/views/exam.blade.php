@extends('pages.main')
@section('title','AllPosts')
@section('content')
    <div class="columns is-mobile" style="margin-top: 1%">
        <div class="column is-6 is-offset-3">
            <div class="box">
                <div class="box-content text-center">
                    <P>بسم الله الرحمن الرحيم</P>
                    <P>جامعه السودان للعلوم والتكنولوجا</P>
                    <P>قسم علوم الحاسوب وتقانه المعلومات</P>
                </div>
            </div>
            {!! Form::open(array('route'=>['students.exam.store',$course_id],'data-parsley-validate'=>'','method'=>'POST'))  !!}
            <div class="box">
                <div class="box-content">
                    <div class="text-center">
                        @foreach($exam_questions as $eq)
                            <h1 ><b>{{$eq->question_name}}<i class="fas fa-question"></i></b></h1>
                            <ul>
                                <li>
                                    <label class="radio">
                                        <span>A-</span>
                                        {{$eq->choice_a}}
                                        <input type="radio" name="{{'answer'.$eq->id}}" value="A">
                                    </label>
                                </li>
                                <li>
                                    <label class="radio">
                                        <span>B-</span>
                                        {{$eq->choice_b}}
                                        <input type="radio" name="{{'answer'.$eq->id}}" value="B">
                                    </label>
                                </li>

                                <li>
                                    <label class="radio">
                                        <span>C-</span>
                                        {{$eq->choice_c}}
                                        <input type="radio" name="{{'answer'.$eq->id}}" value="C">
                                    </label>
                                </li>

                                <li>
                                    <label class="radio">
                                        <span>D-</span>
                                        {{$eq->choice_d}}
                                        <input type="radio" name="{{'answer'.$eq->id}}" value="D">
                                    </label>
                                </li>
                            </ul>
                            <hr>
                            @endforeach

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