<div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <x-header.header-brand />
            <x-header.header-items :categories="$categories" :users="$users" />
            <!-- <x-header.header-search-form /> -->
            <x-header.header-user-dropdown :username="$username" />
        </nav>
    </header>
</div>
