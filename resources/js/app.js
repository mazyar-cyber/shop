import Vue from "vue";
import router from "./services/Router";
import Loader from "./components/loader";
import Product from "./components/Product";
import Dashboard from "./components/Dashboard";
import ProductList from "./components/ProductList";
import Province_City from "./components/Province_City";

Vue.component('loader-component', Loader);
Vue.component('product', Product);
Vue.component('dashboard', Dashboard);
Vue.component('productList', ProductList);
Vue.component('province_city',Province_City);
Vue.use(require('vue-jalali-moment'));
const app = new Vue({
    el: '#app',
    router: router
});
export default app;
