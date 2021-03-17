import Vue from "vue";
import router from "./services/Router";
import Loader from "./components/loader";
import Product from "./components/Product";
import Dashboard from "./components/Dashboard";
import ProductList from "./components/ProductList";
import Province_City from "./components/Province_City";
import Basket from "./components/Basket";
import PriceTable from "./components/PriceTable";
import Category from "./components/Category";
import Like from "./components/Like";
import VuePaginate from 'vue-paginate';
import Pagination from 'vue-pagination-2';


Vue.component('loader-component', Loader);
Vue.component('product', Product);
Vue.component('dashboard', Dashboard);
Vue.component('productList', ProductList);
Vue.component('province_city', Province_City);
Vue.component('basket', Basket);
Vue.component('price-table', PriceTable);
Vue.component('category', Category);
// Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('pagination', Pagination);
Vue.component('like',Like);
Vue.use(VuePaginate);
Vue.use(require('vue-jalali-moment'));
const app = new Vue({
    el: '#app',
    router: router
});
export default app;
