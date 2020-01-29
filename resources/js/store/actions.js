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
    fetchMunicipals({commit}){
        axios.get('/fetch/municipals')
                .then(res => {
                    commit('FETCH_MUNICIPALS', res.data)
                })
                .catch(err => {
                    console.log(err)
                })
    },
    fetchSeach({commit}){
        axios.post('/searches')
                .then(res => {
                    commit('FETCH_PROJECTS', res.data)
                })
                .catch(err => {
                    console.log(err)
                })
    }
}

export default actions