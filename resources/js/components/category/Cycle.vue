<template>
    <div class="row">
        <div class="form-row">
            <div class="form-group col-md-2 mb-1">
                <v-select   :options="cycles"
                            v-model="selectedCategory"
                            placeholder="Select Cycle"></v-select>
            </div>
        </div>
    </div>
</template>
<script>
import vSelect from 'vue-select'

export default {
    components: {
        'v-select':vSelect
    },
    data () {
        return {
            cycles:['Cycle 1', 'Cycle 2', 'Cycle 3', 'Cycle 4'],
            phases:['Phase 1', 'Phase 2', 'Phase 3'],
            selectedCycle:null,
            selectedPhase:null
        }
    }
}
</script>