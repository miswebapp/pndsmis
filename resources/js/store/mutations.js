let mutations = {
    FETCH_PROJECTS(state,projects) {
        return state.projects = projects
    },
    FETCH_CYCLES(state,cycles) {
        return state.cycles = cycles
    },
    FETCH_MUNICIPALS(state,municipals) {
        return state.municipals = municipals
    }
}

export default mutations