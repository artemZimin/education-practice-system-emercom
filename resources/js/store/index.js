import Vuex from 'vuex'
import theme from './modules/theme'
import loading from './modules/loading'

const store = new Vuex.Store({
    modules: { theme, loading }
})

export default store
