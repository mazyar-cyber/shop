<template>
    <div>
        <div class="form-group">
            <label class="col-sm-2 control-label">دسته بندی محصول؟</label>
            <div class="col-sm-10">
                <select name="cat">
                    <option>select...</option>
                    <option v-for="cat in cats" :key="cat.id" @click="getAttribute(cat.id)" :value="cat.id">{{cat.name}}</option>
                </select>
            </div>
        </div>

        <div class="form-group" v-for="(attr,index) in categoryAttr" :key="index">
            <label  class="col-sm-2 control-label">{{attr.name}}</label>

            <div class="col-sm-10">
                <input type="text" class="form-control"
                       name="property[]" required>
            </div>
        </div>
    </div>
</template>

<script>
    import HttpService from "../services/HttpServices/HttpService";

    export default {
        name: "Product",
        data() {
            return {
                category: [],
                categoryAttr:[]
            }
        },
        props: ['cats'],
        methods: {
            getAttribute(id) {
                HttpService.post('/admin/api/getAttr/' + id)
                    .then(response => {
                        console.log(response.data);
                        this.categoryAttr=response.data;
                    })
                    .catch(error => {
                        console.log(error);
                        this.categoryAttr=[];
                    });
            }
        }
    }
</script>

<style scoped>

</style>
