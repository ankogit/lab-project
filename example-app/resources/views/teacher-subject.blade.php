@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Мои предметы</h1>

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
                                <th scope="col">Название предмета</th>
                                <th scope="col">Группа</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Математика</td>
                                <td>КТбо1-1</td>
                                <td><a href="#">Оценки</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Математика</td>
                                <td>КТбо1-1</td>
                                <td><a href="#">Оценки</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Математика</td>
                                <td>КТбо1-1</td>
                                <td><a href="#">Оценки</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Математика</td>
                                <td>КТбо1-1</td>
                                <td><a href="#">Оценки</a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Математика</td>
                                <td>КТбо1-1</td>
                                <td><a href="#">Оценки</a></td>
                            </tr>





                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
