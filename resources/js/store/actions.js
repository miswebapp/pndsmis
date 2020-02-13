import Axios from "axios"

let actions = {
    fetchProjects({commit}){
        axios.get('/fetch/projects')
                .then(res => {
                    commit('FETCH_PROJECTS', res.data)
                })
                .catch(err => {
                    console.log(err)
                })
    },
    fetchCycles({commit}){
        axios.get('/fetch/cycles')
                .then(res => {
                    commit('FETCH_CYCLES', res.data)
                })
                .catch(err => {
                    console.log(err)
                })
    },
    fetchPhases({commit}){
        axios.get('/fetch/phases')
                .then(res => {
                    commit('FETCH_PHASES', res.data)
                })
                .catch(err => {
                    console.log(err)
                })
    },
    fetchMunicipals({commit}){
        axios.get('/fetch/municipals')
                .then(res => {
                    commit('FETCH_MUNICIPALS', res.data)
                })
                .catch(err => {
                    console.log(err)
                })
    },
    sendSeachFilters({commit}, filter){
        commit('ADD_SERACH_FILTER', filter)
        axios.post('/searches', filter)
                .then(res => {
                    commit('FETCH_PROJECTS', res.data)
                })
                .catch(err => {
                    console.log(err)
                })
    }
}

export default actions