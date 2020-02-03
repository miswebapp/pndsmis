import Axios from "axios"

let actions = {
    fetchProjects({commit}){
        axios.get('/fetch/projects')
                .then(res => {
                    commit('ADD_SEARCH_RESULT', res.data)
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
        axios.post('/searches', filter)
                .then(res => {
                    commit('ADD_SEARCH_RESULT', res.data)
                })
                .catch(err => {
                    console.log(err)
                })
    }
}

export default actions