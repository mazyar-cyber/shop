<template>
    <div>
        <div id="content" class="col-sm-9">
            <h3 class="subtitle">بهبود جستجو</h3>
            <div class="category-list row">
                <div class="col-sm-3">
                    <ul class="list-item">
                        <li><a href="category.html">صوتی و تصویری (3)</a></li>
                        <li><a href="category.html">لوازم خانگی (2)</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="list-item">
                        <li><a href="category.html">موبایل و تبلت (2)</a></li>
                        <li><a href="category.html">لپ تاپ (3)</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="list-item">
                        <li><a href="category.html">رومیزی (0)</a></li>
                        <li><a href="category.html">دوربین (0)</a></li>
                    </ul>
                </div>
            </div>

            <div class="product-filter">
                <div class="row">
                    <div class="col-md-4 col-sm-5">
                        <div class="btn-group">
                            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip"
                                    title="List"><i class="fa fa-th-list"></i></button>
                            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip"
                                    title="Grid"><i class="fa fa-th"></i></button>
                        </div>
                        <a href="compare.html" id="compare-total">محصولات مقایسه (0)</a></div>
                    <div class="col-sm-2 text-right">
                        <label class="control-label">مرتب سازی :</label>
                    </div>
                    <div class="col-md-3 col-sm-2 text-right">
                        <select id="input-sort" class="form-control col-sm-3" v-model="sort">
                            <option value="id,asc" selected="selected" @click="getSortedData()">پیشفرض</option>
                            <option value="price,asc" @click="getSortedData()">قیمت (کم به زیاد)</option>
                            <option value="price,desc" @click="getSortedData()">قیمت (زیاد به کم)</option>
                            <option value="title,desc" @click="getSortedData()">حروف الفبا</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-2 text-right">
                        <button class="btn btn-info control-label" @click="getSortedData()">اعمال فیلتر</button>
                        <button class="btn btn-warning control-label" @click="getSearch()"> جستجو</button>
                    </div>

                    <div class="col-sm-1 text-right">
                        <label class="control-label">نمایش :</label>
                    </div>
                    <div class="col-sm-2 text-right">
                        <select id="input-limit" class="form-control" v-model="paginate">
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>


                    <div class="col-sm-2 text-right" v-for="(prop,index) in catProps" :key="index">
                        <label class="control-label">{{prop.title}}</label>
                        <input type="text" class="form-control" v-model="catPropsValue[prop.id]">
                    </div>


                </div>
            </div>
            <br/>
            <div v-show="noData" class="alert alert-danger">هیچ اطلاعاتی جهت نمایش وجود ندارد</div>
            <div class="row products-category" v-if="!noData">

                <div class="product-layout product-list col-xs-12" v-for="product in products.data" :key="product.id">
                    <div class="product-thumb">
                        <div class="image"><a :href="'/FrontProduct/'+product.slug"><img width="230px"
                                                                                         :src="'/storage/photos/product/'+product.photo_path"
                                                                                         :alt="product.title"
                                                                                         :title="product.title"
                                                                                         class="img-responsive"/></a>
                        </div>
                        <div>
                            <div class="caption">
                                <h4><a :href="'/FrontProduct/'+product.slug"> {{product.title}} </a></h4>
                                <p class="description">{{product.description}}</p>
                                <p class="price"><span class="price-new">{{(product.price)-(product.discount_price)}} تومان</span>
                                    <span class="price-old">{{product.price}} تومان</span>
                                    <span class="saving">-26%</span> <span
                                        class="price-tax">بدون مالیات : 90000 تومان</span>
                                </p>
                            </div>
                            <div class="button-group">
                                <a :href="'/basket/add/'+product.id" class="btn-primary"
                                   type="button"><span>افزودن به سبد</span>
                                </a>
                                <div class="add-to-links">
                                    <a type="button" data-toggle="tooltip"
                                       title="افزودن به علاقه مندی ها"><i class="fa fa-heart"></i>
                                        <span>افزودن به علاقه مندی ها</span></a>
                                    <button type="button" data-toggle="tooltip" title="مقایسه این محصول">
                                        <i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--            <pagination :data="products" @pagination-change-page="getData()"></pagination>-->
            <pagination v-model="page" :records="(products.last_page)*25" @paginate="getSortedData()"
                        v-if="!searchFlag"/>
            <pagination v-model="page" :records="(products.last_page)*25" @paginate="getSearch()" v-if="searchFlag"/>

        </div>
    </div>
</template>

<script>
    import HttpService from "../services/HttpServices/HttpService";

    export default {
        name: "Category",
        props: ['cat_id'],
        data() {
            return {
                products: {},
                noData: false,
                page: 1,
                sort: 'id,asc',
                paginate: 2,
                catProps: [],
                catPropsValue: {},
                searchFlag: false
            }
        },
        methods: {
            getSearch() {
                HttpService.post('/frontEnd/api/getSearchProps/' + this.cat_id + '/' + this.paginate + '?page=' + this.page, this.catPropsValue)
                    .then(response => {
                        console.log(response.data);
                        this.products = response.data;
                        this.searchFlag = true;
                        this.noData = this.products.data.length <= 0;
                    })
                    .catch(error => console.error(error));
            },
            getProps() {
                HttpService.get('/frontEnd/api/getCatProps/' + this.cat_id)
                    .then(response => {
                        console.log(response.data);
                        this.catProps = response.data;
                    })
                    .catch(error => console.log(error));
            },
            getData() {
                HttpService.get('/frontEnd/api/getCatProduct/' + this.cat_id + '?page=' + this.page)
                    .then(response => {
                        console.log(response.data);
                        this.products = response.data;
                        this.noData = this.products.data.length <= 0;
                    })
                    .catch(error => console.log(error.data));
            },

            getSortedData() {
                HttpService.get('/frontEnd/api/getCatSortedProduct/' + this.cat_id + '/' + this.sort + '/' + this.paginate + '?page=' + this.page)
                    .then(response => {
                        console.log(response.data);
                        this.products = response.data;
                        if (this.products.data.length <= 0) {
                            this.page = 1;
                            this.getSortedData();
                        }else {
                            this.noData=false;
                        }
                    })
                    .catch(error => console.log(error.data));
            },

        },
        created() {
            this.getData();
            this.getProps();
        }
    }
</script>

<style scoped>

</style>
