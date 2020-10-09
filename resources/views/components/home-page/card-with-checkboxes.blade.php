<div>
    <div>
        <div class="card mb-4">
            <div class="card-header" :v-bind="header">
                Категории
            </div>
            <div v-for="item in data" :key="item.id" class="card-body d-flex flex-row py-1">
                <input type="checkbox" class="mr-2 mt-1" />
                <p class="card-text">Первый</p>
            </div>
        </div>
    </div>
</div>
