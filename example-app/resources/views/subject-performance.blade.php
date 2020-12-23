@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Предмет: {{$subject->title}}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="bd-example">
                        <table class="main_table table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">Работа</th>
                                <th scope="col">Баллы</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($performance as $r)
                                <tr>
                                    <th scope="row">{{$r->event->title}}</th>
                                    <td>{{$r->points}}/{{$r->event->max_points}}</td>
                                </tr>
                            @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
