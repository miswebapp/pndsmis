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
    }
}

export default actions