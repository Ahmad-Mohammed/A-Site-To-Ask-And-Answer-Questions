<template>


<html lang="en">




<body  style="   background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background: #ffffff;
    height: 100%;
    max-width: 100%;
    overflow-x: hidden;">
  

    <!-- body -->
    <div class="row model-mask " >
        <div class="container d-flex  justify-content-center  " style="height: 480px; width: 400px;  border-radius: 5px;
    margin-top: 48px;
    background-color: rgb(182, 196, 196);
    box-shadow: 17px 12px 15px 0px rgb(201 200 209)
" >

   
            <div class="login   rounded  pt-0 pb-0 pe-1 m-auto "
                style="width: 100%; height: 100%; background-color: rgb(182,196,196); ">
                <h3 class="ms-auto  display-flex" @click="toggle" style="cursor: pointer;width: 15px;">&times</h3>
                <h1 class="text-center " style="color:#1b1b1b ; margin-top: -5px;">Register</h1>
              
    <form class="needs-validation mt-2" style="margin-bottom: 115px;
    
      margin-right: 32px;" method="post">
                    <!-- the name -->
                    <div class="form-group mb-2" style="   width: 100%;">
                       
                    </div>
                    <!-- Username -->
                    <div class="form-group mb-2" style="   width: 100%;">
                        <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
                        <label class="form-label" for="email"> UserName:</label>
                        <input type="text" class="form-control  rounded-pill  border-secondary" style="padding: 7px;
                        width: 110%; border: 2px solid #52575d;" placeholder=" @ Username" aria-label="Username"
                            aria-describedby="basic-addon1" v-model="name"  >
                    </div>
                    <!-- حقل الايميل  -->


                    <div class="form-groub mb-2 " style="   width: 100%;">
                        <label class="form-label" for="email" >Email adress:</label>
                        <!-- <label class="invalid-feedback mb-15" for="a">please enter your email adress</label> -->
                        <input class="form-control ms-1 rounded-pill  "  
                            placeholder=" Enter your email "    style="padding: 7px;
          width: 110%; border: 2px solid #52575d;" v-model="email">
          <div v-show="nameError" class="text-danger">
                      the name is too short...
                  </div>
                    </div>
                    <!-- حقل كلمة السر  -->
                    <div class="form-groub    " style="   width: 110%;">
                        <label class="form-label" for="password " > Password:</label>
                        <input class="form-control ms-1  rounded-pill" type="password"
                            placeholder="Enter your pasword "  style="padding: 7px;
          width: 100%; border: 2px solid #52575d;" v-model="password">

                    </div>

                    <!-- من اجل الدخول  -->
                    <div class=" d-flex justify-content-center" style="margin-top: -5px; ">
                         <button  class="btn  d-flex  justify-content-center  rounded-pill  "
                  @click.prevent="submitRegister"  style=" cursor: pointer; width: 50%;  background: linear-gradient(360deg, #aab7be, #f1faee);
    border: 1px solid #4a6572;
    margin: 29px 0px 0px 72px;">Sign in</button>
                        
                    </div>
                </form>
            </div>

        </div>
    </div>
    
    

</body>

</html>


</template>
<script>
export default{
  
    data(){
         return {
             name : '',
             password : '',
             email : '',
            }
     },
     emits:['toggle'],
     computed:{
         nameError(){
            
             return this.name.length > 0 && this.name.length < 4
         },/*
         lastnameError(){
             return this.lastname.length > 0 && this.lastname.length < 4
         }, */
         
         emailError(){
           return !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email)) && this.email.length > 0
         },
         passwordError(){
             return this.password.length > 0 && this.password.length < 7
         },
         isValidForm(){
             return this.name.length > 4   &&
             this.password.length > 5 && (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
         }
     },

     methods:{
      
       submitRegister(){
 //this.$store.commit('setusertoken',{usertoken:'dsdasdasdasdasdsd'})
   let {name,email,password}=this
this.$store.dispatch('Registeruser',{name,email,password})

},
toggle(){

    this.$emit('toggle')
}
      
     }
}
</script>
<style>
.model-mask{
position: fixed;
inset: 0;
background:rgba(0,0,0,.6);
display: grid;
place-items: center;
z-index: 1;

}
</style>