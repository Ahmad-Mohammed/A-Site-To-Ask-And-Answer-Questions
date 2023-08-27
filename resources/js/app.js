import './bootstrap'
import { createApp } from 'vue'
import App from '../js/App.vue'
import { createStore } from 'vuex'
import router from '../component/router/routes'
import axios from 'axios'
const app=createApp(App)
 const store=createStore({
state(){
return {
    count:0,
    usertoken:null,
    user: {},
    Editedquestion:{},
    

}

},
mutations: {
    logout(state){
state.user=null
localStorage.removeItem('usertoken')
window.location.pathname='/'

    },
    setusertoken (state,usertoken) {
      state.usertoken=usertoken
      localStorage.setItem('usertoken',JSON.stringify(usertoken))
axios.defaults.headers.common.Authorization=` Bearer ${usertoken}`
    },
    setuser(state, user) {

        state.user = user
    },
    removeusertoken(state){
state.usertoken=null;
localStorage.removeItem('usertoken')


    },
   Editquestion(state,question){
    state.Editedquestion=question
   },

  },
getters:{

  
    isAdmin(state) {
        if (state.usertoken) {
            return true
        }
        return false

    },
    islogged(state){
        return !!state.usertoken


    },
    PostToEdit(state) {
        return state.Editedquestion
    }
},

actions:{
Registeruser({commit},payload){
    axios.post("/api/register",payload)
    .then(res=>{
        commit('setusertoken',res.data.usertoken)
    }).catch(err=>{console.log(err)})

},

loginuser({commit}, payload) {
    axios.post('/api/login', payload)
        .then(res => {
            commit('setusertoken', res.data.token)
            axios.get('/api/user')
                .then(res => {
                    commit('setuser', res.data.user)
                })
        })
        .catch(err => {
            console.log(err)
        })

}


    
    



}
});

app.use(router)
app.use(store)
app.mount('#app')
