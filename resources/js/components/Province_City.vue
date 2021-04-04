<template>
    <div id="app">
        <div class="form-group required">
            <label for="input-country" class="col-sm-2 control-label">استان</label>
            <div class="col-sm-10">
                <select class="form-control" id="input-country" name="province">
                    <option value=""> --- لطفا انتخاب کنید ---</option>
                    <option v-for="province in provinces" :key="province.id" :value="province.id" @click="getCity(province.id)">{{province.name}}</option>
                </select>
            </div>
        </div>
        <div class="form-group required">
            <label for="input-zone" class="col-sm-2 control-label">شهر</label>
            <div class="col-sm-10">
                <select class="form-control" id="input-zone" name="city">
                    <option value=""> --- لطفا انتخاب کنید ---</option>
                    <option v-for="city in cities" :key="city.id" :value="city.id">{{city.name}}</option>
                </select>
            </div>
        </div>
    </div>
</template>

<script>
    import HttpService from "../services/HttpServices/HttpService";

    export default {
        name: "Province_City",
        data() {
            return {
                provinces: [],
                cities:[]
            }
        },
        methods: {
            getProvinces() {
                HttpService.get('/provinces')
                    .then(response => {
                        console.log(response.data);
                        this.provinces=response.data;
                    })
                    .catch(error => console.error(error));
            },
            getCity(id) {
                HttpService.get('/cities/'+id)
                    .then(response => {
                        console.log(response.data);
                        this.cities=response.data;
                    })
                    .catch(error => console.error(error));
            },
        },
        created() {
            this.getProvinces();
        }
    }
</script>

<style scoped>

</style>
