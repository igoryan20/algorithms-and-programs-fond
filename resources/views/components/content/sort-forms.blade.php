<div class="container border">
    <input type="text" class="form-control mb-4" placeholder="Название программы"/>

    <div>
        <card-with-select />
    </div>

    <div>
        <card-with-checkboxes :data='@json($data)' :header='asdf' />
    </div>

</div>

