@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Редактирование группы</h1>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('admin-groups.update', $group->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Название</label>
                            <input type="text" name="name" value="{{$group->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="bd-example">
                            <table class="main_table table table-sm">
                                <thead>

                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">ФИО</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $r)
                                    <tr>
                                        <th scope="row">{{$r->id}}</th>
                                        <td>{{$r->name}}</td>
                                        <td>{{$r->email}}</td>
                                        @if($r->group->count() <= 0)
                                        <td><a href="{{route('groups-add-user', [$group->id, $r->id])}}">Добавить</a></td>
                                        @endif
                                        @if($r->group->count() > 0)
                                            <td><a href="{{route('groups-remove-user', [$group->id, $r->id])}}">Удалить</a></td>
                                        @endif
                                    </tr>
                                @endforeach



                                </tbody>

                            </table>
                        </div>

                        <button type="submit" class="btn btn-main">Сохранить</button>
                    </form>
                </div>
            </div>

        </div>

    </section>

@endsection
