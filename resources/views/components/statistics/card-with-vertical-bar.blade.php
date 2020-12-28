<div class="card mr-4 mb-4" style="width: 45%">
    <div class="card-header d-flex justify-content-between">
        <p class="my-0">Новые продукты</p>
        <a href="">Подробнее</a>
    </div>
    <div class="card-body">
        <div class="py-12">
            <!-- Chart's container -->
            <div id="new-products" style="height: 300px;"></div>
            <!-- Your application script -->
            <script>
                const newProducts = new Chartisan({
                    el: '#new-products',
                    url: "@chart('new_products_chart')",
                    hooks: new ChartisanHooks()
                     .colors(['#4299E1','#FE0045','#C07EF1'])
                        .datasets('bar')
                        .axis(true)
                });
            </script>
        </div>
    </div>
</div>
