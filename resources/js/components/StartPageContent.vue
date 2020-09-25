<template>
    <div class="d-flex flex-row justify-content-between" style="background-color: #f9fbe7">

        <div class="ml-5 mt-5">
            <programs-list :programs-data='$programsData' />
        </div>

        <div class="mr-5 mt-5">
            <div class="container">
                <form action="/" method="GET" >
                    <input id="search" name="search" type="text"
                        class="form-control mb-4" placeholder="Название программы"/>
                </form>

                <div>
                    <card-with-checkboxes header="Категории" />
                </div>

                <div>
                    <card-with-select />
                </div>

            </div>
        </div>

    </div>

</template>

<script>
export default {
    name: 'StartPageContent'
}
</script>
