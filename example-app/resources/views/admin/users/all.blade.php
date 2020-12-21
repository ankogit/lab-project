@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Пользователи</h1>
            <h1 class="page_add"><a href="{{route('admin-users.create')}}">+</a></h1>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Иванов А.Е" aria-label="Иванов А.Е">
                <button class="btn btn-main" type="submit">Поиск</button>
            </form>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Петров Д. А.</td>
                                <td>email@mail.com</td>
                                <td>Студент</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Петров Д. А.</td>
                                <td>email@mail.com</td>
                                <td>Студент</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Петров Д. А.</td>
                                <td>email@mail.com</td>
                                <td>Студент</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Петров Д. А.</td>
                                <td>email@mail.com</td>
                                <td>Студент</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Петров Д. А.</td>
                                <td>email@mail.com</td>
                                <td>Студент</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Петров Д. А.</td>
                                <td>email@mail.com</td>
                                <td>Студент</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>


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
