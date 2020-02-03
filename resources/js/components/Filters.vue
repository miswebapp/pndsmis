<template>
    <div>
        <form @submit.prevent="sendSearchFilters">
            <div class="card-body">
            <div class="row">
                <input type="hidden" value="techincal" name="check">
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Atividade</label>
                            <select v-model="newFilter.activity" class="form-control form-control-sm">
                                <option value="project">Projetu</option>
                                <option value="project_progress">Progressu Fiziku</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Siklu</label>
                            <select v-model="newFilter.cycle" class="form-control form-control-sm">
                                <option value="0">Hotu-Hotu</option>
                                <option :value="cycle.Cycle_ID" v-for="cycle in filters.cycles">{{ cycle.Cycle_name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm ">
                        <div class="form-group ">
                            <label>Munisipiu</label>
                            <select v-model="newFilter.municipal" class="form-control form-control-sm">
                                <option value="0">Hotu-Hotu</option>
                                <option :value="municipal.Distict_ID" v-for="municipal in filters.municipals">{{ municipal.District_name}}</option>
                            </select>
                        </div>
                    </div>   
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Phase</label>
                            <select v-model="newFilter.phase" class="form-control form-control-sm">
                                <option selected value="0">Hotu-Hotu</option>
                                <option value="1">Phase 1</option>
                                <option value="2">Phase 2</option>
                                <option value="3">Phase 3</option>
                            </select>
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
            newFilter: this.createFilterObject()
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
            this.$store.dispatch('sendSeachFilters', this.newFilter)
        }
    },
    mounted() {
        this.$store.dispatch('fetchMunicipals');
        this.$store.dispatch('fetchCycles');
    },
    computed: {
        ...mapGetters([
            'filters'
        ])
    }
}
</script>