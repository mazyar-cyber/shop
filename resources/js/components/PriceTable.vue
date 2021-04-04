<template>
    <div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
                <button class="btn btn-info" @click="getData()">refresh</button>
                <table class="table table-bordered">
                    <tr>
                        <td class="text-right"><strong>جمع کل:</strong></td>
                        <td class="text-right">{{totalPrice}} تومان</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>کسر کوپن:</strong></td>
                        <td class="text-right">{{coupon}} تومان</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>قابل پرداخت :</strong></td>
                        <td class="text-right">{{payable}} تومان</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import HttpService from "../services/HttpServices/HttpService";

    export default {
        name: "PriceTable",
        data() {
            return {
                totalPrice: 0,
                coupon: 0,
                payable: 0,
            }
        },
        methods: {
            getData() {
                HttpService.post('/calcPrice')
                    .then(resp => {
                        console.log(resp.data);
                        this.totalPrice=resp.data[0].totalPrice;
                        this.payable=resp.data[0].payablePrice;
                        this.coupon=resp.data[0].couponPrice;
                    })
                    .catch(error => console.error(error));
            }
        },
        created() {
            this.getData();
        }
    }
</script>

<style scoped>

</style>
