@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Пользователи</h1>
            <h1 class="page_add"><a href="{{route('admin-users.create')}}">+</a></h1>
{{--            <form class="d-flex">--}}
{{--                <input class="form-control me-2" type="search" placeholder="Иванов А.Е" aria-label="Иванов А.Е">--}}
{{--                <button class="btn btn-main" type="submit">Поиск</button>--}}
{{--            </form>--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="bd-example">
                        <table class="main_table table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ФИО</th>
                                <th scope="col">Email</th>
                                <th scope="col">Роль</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $r)
                                <tr>
                                    <th scope="row">{{$r->id}}</th>
                                    <td>{{$r->name}}</td>
                                    <td>{{$r->email}}</td>
                                    <td>{{$r->role_name}}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin-users.edit', $r->id)}}">[Редактировать]</a><br>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Назад</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Далее</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </section>

@endsection
