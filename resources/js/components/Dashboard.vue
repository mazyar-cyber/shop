<template>
    <div>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>سفارش جدید</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                        class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>افزایش امتیاز</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                        class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{users}}</h3>

                        <p>کاربران ثبت شده</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="http://shop/admin/users" class="small-box-footer">اطلاعات بیشتر <i
                        class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>بازدید جدید</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                        class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

    </div>
</template>

<script>
    import HttpService from "../services/HttpServices/HttpService";

    export default {
        name: "Dashboard",
        data() {
            return {
                users: [],
                currency: [],
            }
        },
        methods: {
            getUsers() {
                HttpService.get('/admin/api/getUser')
                    .then(response => {
                        console.log(response.data);
                        this.users = response.data;
                    })
                    .catch(error => console.log(error));
            },
            getCurrency() {
                HttpService.get("http://api.navasan.tech/dailyCurrency/?item=usd_sell&date=1398-01-09?api_key=edZ7uf7yXQu2VKbnZR7exfpEJIUWvQmF")
                    .then(response => {
                        console.log(response.data);
                        this.currency = response.data;
                    })
                    .catch(error => console.log(error));
            }
        },
        created() {
            this.getCurrency()
            this.getUsers();
        }
    }
</script>

<style scoped>

</style>
