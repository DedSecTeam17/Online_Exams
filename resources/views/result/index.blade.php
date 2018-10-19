<style>
    .table__wrapper {
        overflow-x: auto;
    }
</style>
@extends('pages.main')
@section('title','AllPosts')
@section('content')
<div class="columns is-mobile" style="margin-top: 1%">
    <div class="column is-6 is-offset-3">
        <div class="box">
            <div class="box-content">
                <div class="table__wrapper">
                    <table class="table ">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>اسم الطالب</th>
                            <th>الايميل</th>
                            <th>الكورس</th>
                            <th>الدرجه</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{$result->id}}</td>
                                <td>{{$result->user->name}}</td>
                                <td>{{$result->user->email}}</td>
                                <td>{{$result->course->name}}</td>
                                <td>{{$result->result}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="text-center">
                    <nav>
                        <ul class="pagination justify-content-end">
                            {{$results->links('vendor.pagination.bootstrap-4')}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection