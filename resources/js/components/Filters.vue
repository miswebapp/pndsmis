<template>
    <div>
        <form @submit.prevent="sendSearchFilters">
            <div class="card mb-2">
            <div class="card-body">
            <div class="row">
                <input type="hidden" value="techincal" name="check">
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Atividade</label>
                            <select required v-model="newFilter.activity" class="form-control form-control-sm">
                                <option selected value="project">Projetu</option>
                                <option value="project_progress">Progressu Fiziku</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Siklu</label>
                            <select v-model="newFilter.cycle" class="form-control form-control-sm">
                                <option selected value="">Hotu-Hotu</option>
                                <option :value="cycle.Cycle_ID" v-for="cycle in cycles">{{ cycle.Cycle_name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm ">
                        <div class="form-group ">
                            <label>Munisipiu</label>
                            <select v-model="newFilter.municipal" class="form-control form-control-sm">
                                <option value="">Hotu-Hotu</option>
                                <option :value="municipal.Distict_ID" v-for="municipal in municipals">{{ municipal.District_name}}</option>
                            </select>
                        </div>
                    </div>   
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Phase</label>
                            <select v-model="newFilter.phase" class="form-control form-control-sm">
                                <option selected value="">Hotu-Hotu</option>
                                <option :value="phase.ID" v-for="phase in phases">{{ phase.Phase}}</option>
                            </select>
                        </div>
                    </div>          
                </div>
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
            </div>
        </form>
        <summary-component v-if="submitted"></summary-component>
        <projects-component v-if="submitted"></projects-component>  
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name:'filters',
    data (){
        return {
            newFilter: this.createFilterObject(),
            submitted:false
        }
    },
    methods:{
        createFilterObject(){
            return {
                activity:'',
                cycle:'',
                municipal:'',
                phase:''
            }
        },
        sendSearchFilters() {
            this.$store.dispatch('sendSeachFilters', this.newFilter).then(this.submitted=true)
        }
    },
    mounted() {
        this.$store.dispatch('fetchMunicipals');
        this.$store.dispatch('fetchCycles');
        this.$store.dispatch('fetchPhases');
    },
    computed: {
        ...mapGetters([
            'cycles',
            'municipals',
            'phases'
        ])
        
    }
}
</script>