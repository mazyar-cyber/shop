<template>
    <div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center">تصویر</td>
                    <td class="text-left">نام محصول</td>
                    <td class="text-left">مدل</td>
                    <td class="text-left">تعداد</td>
                    <td class="text-right">قیمت واحد</td>
                    <td class="text-right">کل</td>
                </tr>
                </thead>
                <tbody>
                <tr v-for="basket in allBaskets" :key="basket.id">
                    <td class="text-center"><a href="product.html"><img
                        :src="'/storage/photos/product/'+basket.product.photo_path" alt="تبلت ایسر" title="تبلت ایسر"
                        class="img-thumbnail" width="200px"/></a></td>
                    <td class="text-left"><a href="product.html">{{basket.product.title}} </a><br/>

                    <td class="text-left">SAM1</td>
                    <td class="text-left">
                        <div class="input-group btn-block quantity">
                            <input v-model="basket.count" type="text" name="quantity" size="1" class="form-control"
                                   @keydown.enter="refreshData(basket.count,basket.id)"/>
                            <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"
                                @click="refreshData(basket.count,basket.id)"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="حذف" class="btn btn-danger" onClick=""><i
                            class="fa fa-times-circle"></i></button>
                        </span></div>
                    </td>
                    <td class="text-right">{{(basket.product.price)-(basket.product.discount_price)}} تومان</td>
                    <td class="text-right">{{((basket.product.price)-(basket.product.discount_price))*(basket.count)}}
                        تومان
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import HttpService from "../services/HttpServices/HttpService";
    import Notification from "../services/Notication/notify";

    export default {
        name: "Basket",
        props: ['data'],
        data() {
            return {
                baskets: [],
                basketCount: null,
                allBaskets: [],
            }
        },
        methods: {
            refreshData(count, id) {
                HttpService.post('/api/changeCart/' + count + '/' + id)
                    .then(resp => {
                        console.log(resp.data);
                        Notification.success('تعداد سفارش شما با موفقیت تغییر کرد');
                        this.getData();
                    })
                    .catch(error => console.log(error));
            },
            getData() {
                HttpService.get('/getBasket').then(resp => {
                    console.log(resp.data);
                    this.allBaskets = resp.data;
                }).catch(error => console.error(error.data));
            }
        },
        created() {
            this.getData();
        }
    }
</script>

<style scoped>

</style>
