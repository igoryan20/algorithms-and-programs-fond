<template>
    <div>
        <div class="card mb-4">
            <div class="card-header" :v-bind="header">
                {{ header }}
            </div>
            <div v-for="item in data" :key="item.id" class="card-body d-flex flex-row py-1">
                <input type="checkbox" class="mr-2 mt-1" />
                <p class="card-text">{{ item.name }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CardWithCheckboxes',
    props: ['data', 'header'],
    mounted() {
        console.log('Category sort created.')
    }
}
</script>
