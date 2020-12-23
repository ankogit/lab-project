@extends('layouts.app')

@section('content')

    <section>
        <div class="container main_block">
            <h1 class="page_title">Предметы</h1>
            <h1 class="page_add"><a href="{{route('admin-subjects.create')}}">+</a></h1>
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
                                <th scope="col">Название</th>
                                <th scope="col">Преподаватель</th>
                                <th scope="col">Группа</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $r)
                                <tr>
                                    <th scope="row">{{$r->id}}</th>
                                    <td>{{$r->title}}</td>
                                    <td>{{$r->teacher->name}}</td>
                                    <td>{{$r->group->name}}</td>
                                    <td><a href="{{route('admin-subjects.edit', $r->id)}}">Редактировать</a></td>
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
