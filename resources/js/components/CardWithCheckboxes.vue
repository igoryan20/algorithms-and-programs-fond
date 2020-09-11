<template>
    <div class="card mb-4">
        <div class="card-header">
           categoryHeader
        </div>
        <div class="card-body d-flex flex-row">
            <input type="checkbox" class="mt-1 mr-2" />
            <p class="card-text">categoryName</p>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Category sort created.')
    }
}
</script>
