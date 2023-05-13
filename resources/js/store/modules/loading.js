
const loading = {
    state: () => ({
        loading: false
    }),
    mutations: {
        setLoading: (state, payload) => state.loading = payload
    },
    getters: {
        loading: state => state.loading
    }
}

export default loading
