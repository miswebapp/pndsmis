<template>
    <div>
        <form>
            <div class="card-body">
            <div class="row">
                <input type="hidden" value="techincal" name="check">
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Atividade</label>
                            <select v-model="activity" class="form-control form-control-sm">
                                <option value="project">Projetu</option>
                                <option value="project_progress">Progressu Fiziku</option>
                            </select>
                            <p>Selected: {{ activity }}</p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Siklu</label>
                            <select v-model="cycle" class="form-control form-control-sm">
                                <option value="">Hotu-Hotu</option>
                                <option :value="cycle.Cycle_ID" v-for="cycle in cycles">{{ cycle.Cycle_name }}</option>
                            </select>
                            <p>Selected: {{ cycle }}</p>
                        </div>
                    </div>
                    <div class="col-sm ">
                        <div class="form-group ">
                            <label>Munisipiu</label>
                            <select v-model="municipal" class="form-control form-control-sm">
                                <option value="0">Hotu-Hotu</option>
                                <option :value="municipal.Distict_ID" v-for="municipal in municipals">{{ municipal.District_name}}</option>
                            </select>
                            <p>Selected: {{ municipal }}</p>
                        </div>
                    </div>             
                </div>
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        
        </form>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name:'filters',
    data (){
        return {
            activity:'',
            cycle:'',
            municipal:''
        }
    },
    methods:{
        ...mapActions([])
    },
    mounted() {
        this.$store.dispatch('fetchMunicipals');
        this.$store.dispatch('fetchCycles');
    },
    computed: {
        ...mapGetters([
            'cycles','municipals'
        ])
    }
}
</script>