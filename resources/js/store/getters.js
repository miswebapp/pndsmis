let getters = {
    projects: state => {
        return state.projects
    },
    cycles: state => {
        return state.filters.cycles
    },
    municipals: state => {
        return state.filters.municipals
    },
    filters: state => {
        return state.filters
    }
}

export default getters