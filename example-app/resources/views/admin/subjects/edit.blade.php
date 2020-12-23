@extends('layouts.app')

@section('content')


    <section>
        <div class="container main_block">
            <h1 class="page_title">Редактирование предмета</h1>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('admin-subjects.update', $subject->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Название</label>
                            <input type="text" name="title" value="{{$subject->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Преподаватель</label>
                            <select class="form-select" aria-label="Default select example" name="teacher_id">
                                @foreach($teachers as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Группа</label>
                            <select class="form-select" aria-label="Default select example" name="group_id">
                                @foreach($groups as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-main">Сохранить</button>
                        <br><br>
                        <br><br>
                        <div class="bd-example">
                            <h3>Мероприятия предмета</h3>
                            <table class="main_table table table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Название мероприятия</th>
                                    <th scope="col">Максимальный балл</th>
                                    <th scope="col">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subject->events as $r)
                                    <tr>
                                        <td>{{$r->title}}</td>
                                        <td>{{$r->max_points}}</td>
                                        <td><a href="{{route('subject-remove-event', [$subject->id, $r->id])}}">Удалить</a></td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="bd-example">
                            <h3>Все мероприятия</h3>
                            <table class="main_table table table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Название мероприятия</th>
                                    <th scope="col">Максимальный балл</th>
                                    <th scope="col">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $r)
                                    <tr>
                                        <td>{{$r->title}}</td>
                                        <td>{{$r->max_points}}</td>
                                        <td><a href="{{route('subject-add-event', [$subject->id, $r->id])}}">Добавить</a></td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </form>
                    <br>
                    <br>
{{--                    <a href="" class="btn btn-main">Добавить мероприятие</a>--}}
                </div>


            </div>

        </div>

    </section>

@endsection
