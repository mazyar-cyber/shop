<template>
    <div>
        <i class="fa fa-thumbs-up" @click="Dolike('1')">{{data[0]}}</i>
        <i class="fa fa-thumbs-down" @click="Dolike('0')">{{data[1]}}</i>
    </div>
</template>

<script>
    import HttpService from "../services/HttpServices/HttpService";
    import Notification from "../services/Notication/notify";
    export default {
        name: "Like",
        props: ['pro_id'],
        data() {
            return {
                data:[],
            }
        },
        methods: {
            getData() {
                HttpService.get('/frontEnd/api/getProductLike/' + this.pro_id)
                    .then(response => {
                        console.log(response.data);
                        this.data=response.data;
                    })
                    .catch(error => console.error(error))
            },
            Dolike(param) {
                if (param==='1'){
                    Notification.success('لایک شد');
                }
                else{
                    Notification.error('دیس لایک شد');
                }
                HttpService.get('/frontEnd/api/likeProduct/' + this.pro_id + '/' + param)
                    .then(response => {
                        console.log(response.data);
                        this.getData();
                    })
                    .catch(error => console.error(error))
            },
        },
        created() {
            this.getData();
        }
    }
</script>

<style scoped>

</style>
