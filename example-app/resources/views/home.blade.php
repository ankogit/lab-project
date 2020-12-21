@extends('layouts.app')

@section('content')
    <section>
        <div class="container login_block">
            <div class="row">
                <div class="col-md-6">
                    <div class="signin-image">
                        <figure><img src="img/signin-image.jpg" alt="sing up image"></figure>
                        <!-- <a href="#" class="signup-image-link">Create an account</a> -->

                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center">Авторизация</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>Неправильный логин или пароль. Попробуйте снова</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Пароль</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Оставаться в системе</label>
                        </div>
                        <button type="submit" class="btn btn-main">Войти</button>
                    </form>
                </div>
            </div>

        </div>

    </section>

@endsection
