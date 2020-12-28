<div class="card mr-4 mb-4" style="width: 45%">
    <div class="card-header">
        Поддержка операционных систем
    </div>
    <div class="card-body">
        <div class="py-12">
            <!-- Chart's container -->
            <div id="os_pie" style="height: 300px;"></div>
            <script src="{{ asset('/js/chart.js') }}"></script>
            <script>
                const os_pie = new Chartisan({
                    el: '#os_pie',
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
