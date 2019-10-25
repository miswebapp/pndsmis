<template>
    <div class="row">
            <div class="form-group col-md-3 mb-1">
                    <select v-model="municipals" id='cycle' class="form-control form-control-sm">
                        <!-- <option v-for="municipal in municipals">-- Munisipiu--</option> -->
                        <option v-for="municipal in municipals" :value="municipal.Distict_ID">{{ municipal.District_name }}</option>
                    </select>
            </div>
            <div class="form-group col-md-3 mb-1">    
                    <select id='cycle' class="form-control form-control-sm">
                        <option>-- Postu--</option>
                    </select>
            </div>
            <div class="form-group col-md-3 mb-1">
                    <select id='cycle' class="form-control form-control-sm">
                        <option>-- Suku--</option>
                    </select>
            </div>
    </div>
</template>
<script>
export default {
        data () {
            return {
                 municipals:[]
            }
        },
        methods: {
             fetchMunicipals(){
                this.axios.get(`http://pndsmiswebapp.test/municipal`).then( res => {
                    console.log(res.data);
                    this.municipals = res.data
                }).catch(error => {
                    console.log(error)
                });
            }
        },
        created() {
            this.fetchMunicipals;
        }
}
</script>