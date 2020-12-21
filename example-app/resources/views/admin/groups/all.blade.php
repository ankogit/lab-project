@extends('layouts.app')

@section('content')

    <section>
        <div class="container main_block">
            <h1 class="page_title">Группы</h1>
            <h1 class="page_add"><a href="#">+</a></h1>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="" >
                <button class="btn btn-main" type="submit">Поиск</button>
            </form>
            <div class="row">
                <div class="col-md-12">
                    <div class="bd-example">
                        <table class="main_table table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Название</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>КТбо1-1</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>КТбо1-1</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>КТбо1-1</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>КТбо1-1</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>КТбо1-1</td>
                                <td><a href="#">Редактировать</a></td>
                            </tr>



                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
