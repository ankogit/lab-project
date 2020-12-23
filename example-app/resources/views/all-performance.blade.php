@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Дисциплины</h1>
{{--            <div class="w-100" style="text-align: right;">--}}
{{--                <a class="text-right active" aria-current="page" href="#">100 бальная система</a>--}}
{{--                <a class="" aria-current="page" href="#">5 бальная система</a>--}}
{{--            </div>--}}

            <div class="row">
                <div class="col-md-12">
                    <div class="bd-example">
                        <table class="main_table table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">Название учебной дисциплины</th>
                                <th scope="col">Преподаватель</th>
                                <th scope="col">Баллы</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($subjects as $r)
                                <tr>
                                    <th scope="row"><a href="{{route('subject-performance', $r->id)}}">{{$r->title}}</a></th>

                                    <td>{{$r->teacher->name}}</td>
                                    <td>
                                    <span class="count2">
                                        <span class="g2">
                                            <?php
                                            $a =  $AcademicPerformance;
                                            $a = $a->where('subject_id', $r->id);
                                            $summ = 0;
                                            foreach ($a as $m) $summ += $m->points;
                                            ?>
                                            {{$summ}} / 100
                                        </span>

                                    </span>
                                    </td>
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
