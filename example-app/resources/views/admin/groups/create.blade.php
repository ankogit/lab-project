@extends('layouts.app')

@section('content')

        <section>
            <div class="container main_block">
                <h1 class="page_title">Создание новой группы</h1>
                <div class="row">
                    <div class="col-md-6">
                        <form method="POST" action="{{ route('admin-groups.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Название</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <button type="submit" class="btn btn-main">Создать</button>
                        </form>
                    </div>
                </div>

            </div>

        </section>

@endsection
