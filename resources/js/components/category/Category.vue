<template>
            <div><cycle-phase></cycle-phase>
            <municipal></municipal>
            </div>
</template>
<script>
    import CyclePhase from './Cycles.vue';
    import Municipal from './Municipal.vue';
    export default {
        components: {
            'cycle-phase':CyclePhase,
            'municipal':Municipal
        }
    }
</script>