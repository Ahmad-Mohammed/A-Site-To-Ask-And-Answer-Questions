
<template>

 <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="https://media.flaticon.com/dist/min/img/logo/flaticon_negative.svg" title="Flaticon logo" width="154" height="30" class="block"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <!-- <i class="bi bi-list"></i> -->
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list  "
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <RouterLink  class="nav-link active" aria-current="page" to="/">Home</RouterLink>
          </li>
          <li class="nav-item active " style="cursor:pointer"  v-if="islogged">
            <RouterLink  class="nav-link active" aria-current="page" to="/test">Myprofile</RouterLink>
          
          </li> 

          <li class="nav-item active " style="cursor:pointer" v-if="!islogged">
            <a class="nav-link "  @click="Islogin" >Login</a>
          </li>

          <li class="nav-item" v-if="!islogged" style="cursor:pointer">
            <a class="nav-link active"  @click="Isregister" >register</a>
          </li>

          <li class="nav-item" >
            
             <RouterLink class="nav-link active" to="/navbar/adminqu" v-if='isAdmin' > Questions Approvals</RouterLink> 
          </li>

          <button type="submit" class="border-0 bg-transparent me-auto">
            <li class="nav-item">
              <a class="nav-link active" v-if="islogged" @click.stop="logout">logout</a>
            </li>
          </button>

          <li class="nav-item" v-if='isAdmin'>
            <RouterLink  class="nav-link" to='/navbar/adminan' >Answer Notifications</RouterLink>
          </li>

        </ul>
      </div>
    </div>
  </nav>
    <Login  v-show="islogin" @toggle="Islogin"/>
    <register v-show="isregister " @toggle="Isregister" />
</template>
<script>
import Login from './login.vue';
import register from './register.vue'
export default{
 

    data(){
        return{
islogin:false,
isregister:false,
admin:false

        }
    },
  components:{
    register,
    Login
},
created(){

  this.updateToken()
  this.setuser()

},
    methods:{
      updateToken(){
       let token =JSON.parse(localStorage.getItem('usertoken'));
       this.$store.commit('setusertoken',token)
     },
      logout(){
this.$store.commit('logout')

},

      setuser(){

        if(this.islogged){
    axios.get('api/user')
                .then(res => {
    
                    this.$store.commit('setuser',res.data.user)

                })}
    },

    
Islogin(){

this.islogin=!this.islogin
this.isregister=false
}
,Isregister(){
this.isregister=!this.isregister
this.islogin=false
},

},
computed:{
    islogged(){
      return this.$store.getters.islogged
    },
    isAdmin(){

      return this.$store.getters.isAdmin

}

    
  }

}
</script>
<style>

</style>