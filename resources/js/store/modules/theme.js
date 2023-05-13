
if (!localStorage.getItem('theme')) localStorage.setItem('theme', 'light')

const theme = {
    state: () => ({
        theme: localStorage.getItem('theme')
    }),
    mutations: {
        toggleTheme: state => state.theme = state.theme === 'light' ? 'dark' : 'light'
    },
    actions: {
        toggleTheme: ctx => {
            localStorage.setItem('theme', ctx.state.theme === 'light' ? 'dark' : 'light')
            ctx.commit('toggleTheme')
        }
    },
    getters: {
        theme: state => state.theme
    }
}

export default theme
