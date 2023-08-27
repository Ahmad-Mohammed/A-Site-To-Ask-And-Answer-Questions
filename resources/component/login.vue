<template>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOGIN1</title>
  

</head>

<body>
    <!-- navbar -->
  

    <!-- body -->
    <div class="row  model-mask">
        <div class="container d-flex  justify-content-center  " style="height: 430px; width: 350px;">

            <div class="login   rounded  pt-0 pb-0 pe-1 m-auto "
                style="width: 100%; height: 100%; background-color: rgb(182,196,196); ">
                <h3 class="ms-auto d-flex " @click="togglelogin" style="width: 15px; cursor: pointer;">&times</h3>
                <h1 class="text-center " style="color:#1b1b1b ; margin-top: 15px;">LOG IN</h1> 
                <form class="needs-validation mt-5" style="margin-bottom: 115px;
          margin-right: 32px;" method="post">
                    <!-- حقل الايميل  -->
                    <div class="form-groub mb-3 " style="   width: 110%;">
                        <label class="form-label ms-2" for="email" >Email adress:</label>
                        <!-- <label class="invalid-feedback mb-15" for="a">please enter your email adress</label> -->
                        <input class="form-control ms-1 rounded-pill  " id="a" type="email"
                          style=" padding: 7px;
              width: 100%; border: 2px solid #52575d;
"  placeholder=" Enter your email "  v-model="email">
                            <div v-show="emailError" class="text-danger">
                     the email is not valid...
                  </div>
              
                    </div>
                    <!-- حقل كلمة السر  -->
                    <div class="form-groub    " style="   width: 110%;">
                        <label class="form-label ms-2" for="password "> Password:</label>
                        <input class="form-control ms-1  rounded-pill" type="password"
                          style=" padding: 7px;
              width: 100%; border: 2px solid #5d5257;
"  placeholder="Password" id="password "  v-model="password" >
                           
                            <div v-show="passwordError" class="text-danger">
                      the password is too short...
                  </div>
              
                    </div>

                    <!-- من اجل الدخول  -->
                    <button class="bt14 btn  d-flex justify-content-center  rounded-pill  " type="submit" 
                        style="cursor: pointer; width: 50%; background: linear-gradient(360deg, #aab7be, #f1faee);
    border: 1px solid #4a6572;
    margin: 29px 0px 0px 72px;" :disabled="!isValidForm"
                  @click.prevent="submitLogin ">Sign in</button>

                        
                
                </form>
            </div>

        </div>
    </div>





    </body>

</html>

</template>
<script>
import axios from 'axios'

export default{
    computed:{
         emailError(){
           return !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email)) && this.email.length > 0
         },
         passwordError(){
             return this.password.length > 0 && this.password.length < 7
         },
         isValidForm(){
             return this.password.length > 5 && (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
         },
         

     }
     ,
     data(){
         return {
             password : '',
             email : '',
         }
     },
     emits:["toggle"],
     methods:{
       submitLogin(){
        
         let {email,password} = this;
         this.$store.dispatch('loginuser',{email,password})
       },
   

       togglelogin(){

this.$emit('toggle')

       }
     }
}

</script>
<style>
.model-mask{
/* background:rgba(0,0,0,.6); */
display: grid;
place-items: center;
z-index: 1;

}
bt14{
    color:black;
}


</style>
