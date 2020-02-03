import state from "./state"

let mutations = {
    FETCH_PROJECTS(state,projects) {
        return state.projects = projects
    },
    FETCH_CYCLES(state,cycles) {
        return state.filters.cycles = cycles
    },
    FETCH_MUNICIPALS(state,municipals) {
        return state.filters.municipals = municipals
    },
    ADD_SEARCH_RESULT(satet, projects){
        return state.projects = projects
    }
}

export default mutations