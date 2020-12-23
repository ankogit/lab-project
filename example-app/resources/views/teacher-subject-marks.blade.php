@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Оценки по предмету</h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="bd-example">
                        <form method="POST" action="{{ route('teacher-subject-marks-save', $subject->id) }}">
                            @csrf
                        <table class="main_table table table-sm table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Студент</th>

                                @foreach($subject->events as $r)
                                    <th scope="col">{{$r->title}} - макс. {{$r->max_points}} б.</th>
                                @endforeach


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subject->group->users as $r)

                                <tr>
                                    <th scope="row">{{$r->name}}</th>
                                    @foreach($subject->events as $e)
                                        <?php
                                        $p = clone $performance;
                                        $p = $p->where('user_id', $r->id)->where('event_id', $e->id)->first();
                                        ?>
                                        <td>
                                            <input name="{{$r->id}}_{{$e->id}}"
                                                   class="form-control form-control-sm"
                                                   type="number"
                                                   @if($p) value="{{$p->points ?? 0 }}" @else value="0" @endif

                                                   min="0" max="{{$e->max_points}}"
                                                   required>
                                        </td>
                                    @endforeach

                                </tr>

                            @endforeach




                            </tbody>

                        </table>
                        <button type="submit" class="btn btn-main">Сохранить</button>

                        </form>
                    </div>


                </div>
            </div>

        </div>

    </section>

@endsection
