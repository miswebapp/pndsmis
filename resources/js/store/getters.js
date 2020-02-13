let getters = {
    projects: state => {
        return state.projects
    },
    cycles: state => {
        return state.cycles
    },
    phases: state => {
        return state.phases
    },
    municipals: state => {
        return state.municipals
    },
    filters: state => {
        return state.filters
    },
    projectSummary: (state, getters) => {
        let total_project = state.projects.filter(project => project).length
        let total_completed = state.projects.filter(project => project.SubprojectStatusID == 3).length
        let total_approved = state.projects.filter(project => project.SubprojectStatusID == 1).length
        let total_ongoing = state.projects.filter(project => project.SubprojectStatusID == 2).length
        let total_cancelled = state.projects.filter(project => project.SubprojectStatusID == 7).length
        let total_failed = state.projects.filter(project => project.SubprojectStatusID == 6).length
        let total_suspended = state.projects.filter(project => project.SubprojectStatusID == 4).length

        return {
           total_project,total_completed,total_approved,total_ongoing,total_cancelled,total_failed,total_suspended
        }; 
    },
    getSelectedFilter: state => {
        return state.selectedFilters
    }

    // getMunicipalById: state => id => {
    //     return state.municipals.find(municipal => municipal.Distict_ID === id)
    // }
}

export default getters