<div>
  <div class="d-flex flex-row justify-content-between" style="background-color: #f9fbe7">

    <div class="ml-5 mt-5">
      <x-home-page.programs-list />
    </div>

    <div class="mr-5 mt-5">
      <div class="container">
        <form action="/" method="GET" >
          <input id="search" name="search" type="text"
            class="form-control mb-4" placeholder="Название программы"/>
        </form>
          <x-home-page.card-with-checkboxes />
          <x-home-page.card-with-select />
      </div>
    </div>

  </div>
</div>
