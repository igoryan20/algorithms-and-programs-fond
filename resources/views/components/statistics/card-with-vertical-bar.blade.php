<div class="card mr-4 mb-4" style="width: 45%">
    <div class="card-header d-flex justify-content-between">
        @if ($chart == 'new_products_chart')
            <p class="my-0">Новые продукты</p>
        @endif
        @if ($chart == 'new_relizes_chart')
            <p class="my-0">Новые релизы</p>
        @endif
        <a href="">Подробнее</a>
    </div>
    <div class="card-body">
        <div class="py-12">
            <!-- Chart's container -->
            <div id="{{ $chart }}" style="height: 300px;"></div>
            <!-- Your application script -->
            <script>
                val = "<?php echo $chart ?>";
                url = "http://fond.test/api/chart/" + val
                console.log(val)
                console.log(url)
                new Chartisan({
                    el: '#' + val,
                    url: url,
                    hooks: new ChartisanHooks()
                     .colors(['#4299E1','#FE0045','#C07EF1'])
                        .datasets('bar')
                        .axis(true)
                });
            </script>
        </div>
    </div>
</div>
