<template>
    <div class="container" style="width: 70vw">
        <ul class="list-group">
            <div v-for="item in programsData" :key="item.id" class="list-group-item d-flex" style="background-color: #f9fbe7">
                <img v-if="item.imgPath != null" :src="item.imgPath" alt="картинка 1" class="mr-2" width="76px" height="76px"/>
                <img v-else src="/img/default.png" alt="картинка 1" class="mr-2" width="76px" height="76px"/>
                <div>
                    <h5 class="mb-0">{{ item.name }}</h5>
                    <p class="mb-1">{{ item.description }}</p>
                    <div>
                        <i v-if="item.windows" class="fab fa-windows"></i>
                        <i v-if="item.macOS" class="fab fa-apple"></i>
                        <i v-if="item.linux" class="fab fa-linux"></i>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'ProgramsList',
        props: ['programsData']
    }
</script>
