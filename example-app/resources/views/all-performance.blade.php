@extends('layouts.app')

@section('content')
    <section>
        <div class="container main_block">
            <h1 class="page_title">Дисциплины</h1>
            <div class="w-100" style="text-align: right;">
                <a class="text-right active" aria-current="page" href="#">100 бальная система</a>
                <a class="" aria-current="page" href="#">5 бальная система</a>
            </div>

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
                            <tr>
                                <th scope="row"><a href="#">Безопасность информационных технологий</a></th>
                                <td>Петров Д. А.</td>
                                <td>
      	<span class="count">
      		<span class="g">
      			4.1
      		</span>

      	</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">Безопасность информационных технологий</a></th>
                                <td>Петров Д. А.</td>
                                <td>
      	<span class="count">
      		<span class="b">
      			3.1
      		</span>
      	</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">Безопасность информационных технологий</a></th>
                                <td>Петров Д. А.</td>
                                <td>
      	<span class="count">
      		<span class="e">
      			4.9
      		</span>
      	</span>
                                </td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
