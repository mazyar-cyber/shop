import Vue from "vue";
import router from "./services/Router";
import Loader from "./components/loader";
import Product from "./components/Product";
Vue.component('loader-component',Loader);
Vue.component('product',Product);
const app = new Vue({
    el: '#app',
    router:router
});
export default app;
