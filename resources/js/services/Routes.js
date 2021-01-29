import Dashboard from "../components/Dashboard";
import Loader from "../components/loader";
import Product from "../components/Product";
import Brand from "../components/Brand";
// const allUrls = [
//     {path: 'admin/product/create', name: "product", component: Product},
// ]
const allUrls = [
    {
        path: '/admin', component: Loader, children: [
            {path: 'product/create', name: "product", component: Product},
            {path: 'brand/create', name: "brand", component: Brand},
            {path: 'dashboard', name: "admin", component: Dashboard},
        ]
    }
]
export default allUrls;
