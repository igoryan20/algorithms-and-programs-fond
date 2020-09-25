// Pages
Vue.component('main-page', require('./pages/MainPage.vue').default);

// General components
Vue.component('header-vue', require('./components/Header.vue').default);
Vue.component('start-page-content', require('./components/StartPageContent.vue').default);


// Content components
Vue.component('card-with-checkboxes', require('./components/content/CardWithCheckboxes.vue').default);
Vue.component('card-with-select', require('./components/content/CardWithSelect.vue').default);
Vue.component('programs-list', require('./components/content/ProgramsList.vue').default);

// Header components
Vue.component('navbar-brand', require('./components/header/NavbarBrand.vue').default);
Vue.component('navbar-items', require('./components/header/NavbarItems.vue').default);
Vue.component('navbar-search-form', require('./components/header/NavbarSearchForm.vue').default);
Vue.component('navbar-user-dropdown', require('./components/header/NavbarUserDropdown.vue').default);
