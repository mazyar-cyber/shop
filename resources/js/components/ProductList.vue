<template>
    <div>

        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">

                <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو" v-model="search" @keydown="searchData()" @keydown.enter.prevent="searchData">

                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default" @click.prevent="searchData"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-danger" @click.prevent="deleteSelected()"><i class="fa fa-delete"></i>حذف موارد</button>
                </div>
            </div>
        </div>
        <table class="table table-hover">
            <tbody>
            <tr>
                <th><input type="checkbox" name="checkBoxArray" id="option" v-model="check"></th>
                <th>عنوان</th>
                <th>شناسه ی محصول</th>
                <th>اسم مستعار</th>
                <th> وضعیت</th>
                <th> قیمت</th>
                <th> تخفیف</th>
                <th> توضیحات</th>
                <th> برند</th>
                <th>دسته بندی</th>
                <th> تاریخ ایجاد</th>
                <th> تاریخ به روز رسانی</th>
                <th> ویرایش</th>
                <th> نمایش</th>
                <th></th>
            </tr>


            <tr v-for="product in products" :key="product.id">

                <td><input class="checkBox" type="checkbox" name="checkBoxArray[]" :value="product.id"  v-model="selectedProductId" :checked="check"></td>
                <td><a :href="'product/'+product.id+'/edit'">{{product.title}}</a></td>
                <td>{{product.sku}}</td>
                <td>{{product.slug}}</td>
                <td>{{product.status}}</td>
                <td>{{product.price}}</td>
                <td>{{product.discount_price}}</td>
                <td><textarea readonly class="text-aqua">{{product.description}}</textarea></td>
                <td>{{product.brand.name}}</td>
                <td><a href="showProcatAttr">{{product.category.name}}</a></td>
                <td>
                    {{ product.created_at }}
                </td>

                <td>
                    {{product.updated_at}}
                </td>

                <td>
                    <a :href="'product/'+product.id+'/edit'" class="btn btn-instagram">ویرایش</a>
                </td>
                <td>
                    <a :href="'product/'+product.id" class="btn btn-info">نمایش</a>
                </td>
                <td>
                    <button type="submit" class="btn btn-danger" @click.prevent="destroy(product.id)">حذف</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import HttpService from "../services/HttpServices/HttpService";
    import Notification from "../services/Notication/notify";

    export default {
        name: "ProductList",
        data() {
            return {
                products: [],
                check: false,
                search:'',
                selectedProductId:[],
            }
        },
        methods: {
            getData() {
                HttpService.get('/admin/api/getProducts')
                    .then(response => {
                        console.log(response.data);
                        this.products = response.data;
                    })
                    .catch(error => console.log(error));
            },
            destroy(id) {
                HttpService.get('/admin/api/deleteProduct/' + id).then(response => {
                    console.log(response.data);
                    Notification.success('محصول مورد نظر با موفقیت حذف شد');
                    this.getData();
                }).catch(error => console.log(error));
            },
            deleteSelected(){
                HttpService.post('api/deleteSelectedProduct',{allId:this.selectedProductId}).then(response=> {
                    console.log(response.data);
                    this.getData();
                    if (response.data===0){
                        Notification.error('هیچ موردی یافت نشد');
                    }else {
                        Notification.success('موارد انتخاب شده با موفقیت حذف شدند');
                    }
                }).catch(error=> {
                    console.log(error);
                    Notification.error('سیستم در حذف موارد با مشکل مواجه شد');
                });
            },
            searchData(){
                HttpService.post('/admin/api/searchProduct', {searchTitle: this.search})
                    .then(response=> {
                        console.log(response.data);
                        this.products=response.data;
                        if (!this.products[0]){
                            Notification.error('نتیجه یافت نشد')
                        }
                    })
                    .catch(error=>console.log(error));
            },
        },
        created() {
            return this.getData();
        }
    }
</script>

<style scoped>

</style>
