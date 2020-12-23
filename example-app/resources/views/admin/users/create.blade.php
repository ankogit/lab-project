@extends('layouts.app')

@section('content')

    <section>
        <div class="container main_block">
            <h1 class="page_title">Создание нового пользователя</h1>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('admin-users.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ФИО</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Длинна поля меньше 5 символов.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Данный еmail уже занят.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Пароль</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Слабый пароль
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Роль</label>
                            <select class="form-select" aria-label="Default select example" name="role_id">
                                <option value="0">Администратор</option>
                                <option value="1">Преподаватель</option>

                                <option value="2">Студент</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-main">Создать</button>
                    </form>
                </div>
            </div>

        </div>

    </section>
@endsection
