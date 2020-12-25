@extends('layouts.main-layout')

@section('title')
    Статистика
@endsection

@section('page-content')

<div style="background-color: #f9fbe7">
    <h1 class="pt-4 mr-auto ml-auto w-75">Статистика</h1>
    <hr class="ml-auto w-75">

    <div class="mx-auto w-75 d-flex flex-wrap">
        <div class="card mr-4 w-25">
            <div class="card-header">
                Общие сведения
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <td>Продуктов</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>Релизов</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>Пользователей</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Разработчиков</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mr-4 w-50">
            <div class="card-header">
                Поддержка операционных систем
            </div>
            <div class="card-body">
                <div class="py-12">
                    <!-- Chart's container -->
                    <div id="chart" style="height: 300px;"></div>
                    <!-- Charting library -->
                    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
                    <!-- Chartisan -->
                    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
                    <!-- Your application script -->
                    <script>
                        const chart = new Chartisan({
                            el: '#chart',
                            url: "@chart('os_chart')",
                            hooks: new ChartisanHooks()
                             .colors(['#4299E1','#FE0045','#C07EF1'])
                                .datasets('pie')
                                .axis(false)
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
