<template>
<div class="card mb-2">
    <div class="card-body">
        <div class="row centertext">
            <div class="col-sm ">
                <eva-icon name="home" animation="pulse" fill="black"></eva-icon> <h6>{{ getSelectedFilter.municipal.length == 0 ? getSelectedFilter.municipal.District_name : getSelectedFilter.municipal.District_name}}</h6>
            </div>
            <div class="col-sm">
                <eva-icon name="sync" animation="pulse" fill="grey"></eva-icon> <h6>{{getSelectedFilter.cycle.length == 0? getSelectedFilter.cycle.Cycle_name : getSelectedFilter.cycle.Cycle_name}}</h6>
            </div>
            <div class="col-sm">
                <eva-icon name="layers" animation="pulse" fill="grey"></eva-icon> <h6>{{getSelectedFilter.phase.length == 0 ? getSelectedFilter.phase.Phase : getSelectedFilter.phase.Phase}}</h6>
            </div>
            <div class="col-sm">
                <!-- <h7>Total Projetu: 282</h7> -->
                <eva-icon name="keypad" animation="pulse" fill="blue"></eva-icon> <h6>Total Projetu {{projectSummary.total_project}}</h6>
            </div>
            <div class="col-sm">
                <eva-icon name="bar-chart-2" animation="pulse" fill="purple"></eva-icon><h6>Total Sei Halao {{projectSummary.total_ongoing}}</h6>
            </div>
            <div class="col-sm">
                <eva-icon name="checkmark-square-2" animation="pulse" fill="limegreen"></eva-icon><h6>Total Kompleta {{projectSummary.total_completed}}</h6>
            </div>
            <div class="col-sm">
                <eva-icon name="close-square" animation="pulse" fill="red"></eva-icon><h6>Total Kanseladu {{projectSummary.total_cancelled}}</h6>
            </div>
            <div class="col-sm centered">
                <eva-icon name="slash" animation="pulse" fill="grey"></eva-icon><h6>Total Failhadu {{projectSummary.total_failed}}</h6>
            </div>         
        </div>
    </div>
</div>
</template>
<script>
import { EvaIcon } from 'vue-eva-icons'
import { mapGetters } from 'vuex'
export default {
    components: {
        [EvaIcon.name]: EvaIcon
    },
    computed: {
        ...mapGetters([
            'filters',
            'projectSummary',
            'getSelectedFilter'
        ])
    }
}
</script>

<style scoped>
.ongoing {
    color:purple;
}
.completed {
    color:green;
}

.failed {
    color:slategray;
}

.cancelled {
    color:red;
}
table > td{
    text-align: center;
}

.centertext{
    text-align: center;
}
</style>