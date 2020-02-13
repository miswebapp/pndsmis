import state from "./state"

let mutations = {
    FETCH_PROJECTS(state,projects) {
        return state.projects = projects
    },
    FETCH_CYCLES(state,cycles) {
        return state.cycles = cycles
    },
    FETCH_MUNICIPALS(state,municipals) {
        return state.municipals = municipals
    },
    FETCH_PHASES(state,phases) {
        return state.phases = phases
    },
    ADD_SEARCH_RESULT(state, projects){
        return state.projects = projects
    },
    ADD_SERACH_FILTER(state, filters){
        let allPhase = {
            Phase:"Faze Hotu"
        }
        let allCycle = {
            Cycle_name:"Siklu Hotu"
        }
        let nacional = {
            District_name: "Munisipu Hotu"
        }
        let selectedFilters = {
            activity : filters.activity,
            municipal : filters.municipal !== '' ? state.municipals.find(municipal => municipal.Distict_ID === filters.municipal) : Object.assign({}, state.municipal, nacional),
            cycle : filters.cycle !== '' ? state.cycles.find(cycle => cycle.Cycle_ID === filters.cycle) : Object.assign({}, state.cycle, allCycle),
            phase : filters.phase !== '' ? state.phases.find(phase => phase.ID === filters.phase) : Object.assign({}, state.phase, allPhase)
        }
        return state.selectedFilters = selectedFilters
    }
}

export default mutations