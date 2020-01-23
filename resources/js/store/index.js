import Vue from 'Vue'
import Vuex from 'Vuex'
import actions from './actions'
import mutations from './mutations'
import getters from './getters'
import state from './state'

Vue.use(Vuex);

export default new Vuex.Store({
    state,
    actions,
    mutations,
    getters
})