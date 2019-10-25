<template>  
    <form action="#" method="POST">
            <div class="form-row">
                <div class="form-group col-md-2 mb-1">
                    <select v-model="selectedCategory" id='category' class="form-control form-control-sm rounded-sm" @change="onChange">
                        <option selected value='0'>-- Hili Kategoria --</option>
                        <option v-for="cat in categories" :value="cat.id">{{cat.name}}</option>
                    </select>
                </div>
               <activity :selected-category="selectedCategory" :is-selected="isSelected"></activity>
               <cycle></cycle>
               <municipal></municipal>
            </div>
            <div class='row'>
                <div class="form-group col-md-6 mb-0">
                    <button class="btn btn-primary  rounded-sm btn-sm ">Foti Dadus</button>
                </div>
            </div>
        </form>
</template>

<script>
import Activity from './category/Activity.vue';
import Cycle from './category/Cycle.vue';
import Municipal from './category/Municipal.vue';


export default {
    components: {
        'activity':Activity,
        'cycle':Cycle,
        'municipal':Municipal
    },
    data(){
        return {
            categories: [
                {id:"social",name:"Sosial"},{id:"finance",name:"Finansas"},{id:"technical",name:"Teknikal"},{id:"other",name:"Seluk"}
            ],
            selectedCategory: null,
            isSelected: false
        }
    },
    methods: {
        onChange(){
            this.isSelected = true
        }
    }
}
</script>