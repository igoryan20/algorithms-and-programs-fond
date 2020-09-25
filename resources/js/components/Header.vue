<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <navbar-brand />
            <navbar-items />
            <navbar-search-form />
            <navbar-user-dropdown />
        </nav>
    </header>
</template>

<script>
    export default {
        name: 'Header',
        mounted() {
            console.log('pzd')
        }
    }
</script>
