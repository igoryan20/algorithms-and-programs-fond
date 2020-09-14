<template>
    <div class="container" style="width: 70vw">
        <ul class="list-group">
            <div v-for="item in data" :key="item.id" class="list-group-item d-flex" style="background-color: #f9fbe7">
                <img :src="assert(item.imgPath)" alt="картинка 1" class="mr-2" width="76px" height="76px"/>
                <div>
                    <h5 class="mb-0">{{ item.name }}</h5>
                    <p class="mb-1">{{ item.description }}</p>
                    <div>
                        <i class="fab fa-windows"></i>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'ProgramsList',
        props: ['data'],
        mounted() {
            console.log(this.data)
        }
    }
</script>
