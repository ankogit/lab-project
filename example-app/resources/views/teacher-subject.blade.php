@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Мои предметы</h1>

{{--            <form class="d-flex">--}}
{{--                <input class="form-control me-2" type="search" placeholder="" >--}}
{{--                <button class="btn btn-main" type="submit">Поиск</button>--}}
{{--            </form>--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="bd-example">
                        <table class="main_table table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Название предмета</th>
                                <th scope="col">Группа</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $r)
                                <tr>
                                    <th scope="row">{{$r->id}}</th>
                                    <td>{{$r->title}}</td>
                                    <td>{{$r->group->name}}</td>
                                    <td><a href="{{route('teacher-subject-marks', $r->id)}}">Оценки</a></td>
                                </tr>
                            @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
