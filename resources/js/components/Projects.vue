<template>
    <div class="d-flex bd-highlight">
        <div class="p-1 flex-grow-1 bd-highlight">
            <table class="table able-hover table-condensed table-striped table-bordered table-sm">
                <thead>
                    <tr>
                        <th scope="col">Siklu</th>
                        <th scope="col">Munisipiu</th>
                        <th scope="col">PA</th>
                        <th scope="col">Suco</th>
                        <th scope="col">Naran Projetu</th>
                        <th scope="col">Data-Hahu</th>
                        <th scope="col">Data-Remata</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="project in projects">
                            <td>{{ project.Cycle_name }}</td>
                            <td>{{ project.District_name}}</td>
                            <td>{{ project.Subdistrict_name}}</td>
                            <td>{{ project.Suco_Name}}</td>
                            <td>{{ project.Subproject_Name}}</td>
                            <td>{{ new Date(project.Actual_StartDate) | dateFormat('DD/MM/YYYY')}}</td>
                            <td>{{ new Date(project.Actual_FinishDate) | dateFormat('DD/MM/YYYY')}}</td>
                            <td>Completed</td>   
                    </tr>
                </tbody>
            </table>
            <div class="mx-auto"></div>
        </div>
        <div class="p-2 bd-highlight"></div>
    </div>   
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name: "projects",
    mounted() {
        this.$store.dispatch('fetchProjects')
    },
    computed: {
        ...mapGetters([
            'projects'
        ])
    }
}
</script>

<style scoped>

</style>