@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Оценки по предмету</h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="bd-example">
                        <table class="main_table table table-sm table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Студент</th>
                                <th scope="col">Лаб1 - макс. 5 б.</th>
                                <th scope="col">Лаб2 - макс. 5 б.</th>
                                <th scope="col">Лаб3 - макс. 5 б.</th>
                                <th scope="col">Экзамен - макс. 40 б.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Петров Д. А.</th>
                                <td><input class="form-control form-control-sm" type="text" value="5"></td>
                                <td><input class="form-control form-control-sm" type="text" value="4"></td>
                                <td><input class="form-control form-control-sm" type="text" value="3"></td>
                                <td><input class="form-control form-control-sm" type="text" ></td>
                            </tr>
                            <tr>
                                <th scope="row">Петров Д. А.</th>
                                <td><input class="form-control form-control-sm" type="text" value="5"></td>
                                <td><input class="form-control form-control-sm" type="text" value="4"></td>
                                <td><input class="form-control form-control-sm" type="text" value="3"></td>
                                <td><input class="form-control form-control-sm" type="text" ></td>
                            </tr>
                            <tr>
                                <th scope="row">Петров Д. А.</th>
                                <td><input class="form-control form-control-sm" type="text" value="5"></td>
                                <td><input class="form-control form-control-sm" type="text" value="4"></td>
                                <td><input class="form-control form-control-sm" type="text" value="3"></td>
                                <td><input class="form-control form-control-sm" type="text" ></td>
                            </tr>
                            <tr>
                                <th scope="row">Петров Д. А.</th>
                                <td><input class="form-control form-control-sm" type="text" value="5"></td>
                                <td><input class="form-control form-control-sm" type="text" value="4"></td>
                                <td><input class="form-control form-control-sm" type="text" value="3"></td>
                                <td><input class="form-control form-control-sm" type="text" ></td>
                            </tr>
                            <tr>
                                <th scope="row">Петров Д. А.</th>
                                <td><input class="form-control form-control-sm" type="text" value="5"></td>
                                <td><input class="form-control form-control-sm" type="text" value="4"></td>
                                <td><input class="form-control form-control-sm" type="text" value="3"></td>
                                <td><input class="form-control form-control-sm" type="text" ></td>
                            </tr>
                            <tr>
                                <th scope="row">Петров Д. А.</th>
                                <td><input class="form-control form-control-sm" type="text" value="5"></td>
                                <td><input class="form-control form-control-sm" type="text" value="4"></td>
                                <td><input class="form-control form-control-sm" type="text" value="3"></td>
                                <td><input class="form-control form-control-sm" type="text" ></td>
                            </tr>
                            <tr>
                                <th scope="row">Петров Д. А.</th>
                                <td><input class="form-control form-control-sm" type="text" value="5"></td>
                                <td><input class="form-control form-control-sm" type="text" value="4"></td>
                                <td><input class="form-control form-control-sm" type="text" value="3"></td>
                                <td><input class="form-control form-control-sm" type="text" ></td>
                            </tr>



                            </tbody>

                        </table>
                        <button type="submit" class="btn btn-main">Сохранить</button>
                    </div>


                </div>
            </div>

        </div>

    </section>

@endsection
