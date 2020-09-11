<div class="d-flex flex-row justify-content-between" style="background-color: #f9fbe7">


    <div class="ml-5 mt-5">
        <programs-list :data='@json($data)' />
    </div>

    <div class="mr-5 mt-5">
        @include('components.content.sort-forms')
    </div>

</div>
