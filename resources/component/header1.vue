<template>

<header class="container-fluid  d-flex align-items-center  pt-3 " style="height: 400px; ">
        <div class=" mx-auto  ">
          <span class="text h2   font-weight-light  text-black-100    ">
            Knowledge is the eye of desire and can become the pilot of the soul...</span>
          <div class="row mt-5   ">
            <form class="d-flex   " role="search">
              <div class="drop  col-4 ms-auto" >
              <categories></categories>

              </div>
              <div class=" col-4  m-auto d-flex ">
                <div class="input-group  mb-3" >
                  <input class="form-control  rounded-pill  ms-3" type="search " placeholder="Search "   @keyup.enter.prevent  @keyup="searchbinding(search)" v-model="search" />
                </div>
              </div>
            </form>
            </div>
          
          <div class=" d-flex justify-content-center mt-4">
            <button href="Answer.html"
              class="link btn1 border-0 rounded-pill col-4 d-flex justify-content-center m-lg-2 p-1  p-lg-2  rounded-pill"
               @click="addquestion">Add
              a
              question</button>
          </div>
        </div>
      </header>
      





</template>
<script>
import categories from './categories.vue'

export default{
   emits:["SB","addquestion1"],
    components:{
    categories

   } ,
   data(){
            return{
                search:'',
                
            }
        },

methods:{
   

    addquestion(){

        this.$emit('addquestion1')
    },
    searchbinding(search){
this.$emit('SB',this.search)


    }
}


}
</script>
<style>

.navbar {
    padding: 0 0;
    /* background-color: #445a7a; */
    background-color: #4a6572;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%),
        inset 0 -1px 0 rgb(255 255 255 / 15%);
        /* text-decoration: none; */
      
        
} 

 /* .card {
    background-color: #d8dde3
 } */

body{

    color: black;
}

header {
    
    position: relative;
    width: 100%;
    height: 250px;
    background-position: center;
    background-color:#8894a0;   
    /* background-size: contain;
    background-size: cover; */
}

/* search */
.main {
    width: 50%;
    margin: 50px auto;
}

.form-select-sm {
    padding: 8px;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
.navbar .navbar-nav .nav-link {
    text-decoration: none;
    /* color: aliceblue; */
    color: aliceblue;
}
.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link:active,
.navbar .navbar-nav .nav-link:focus,
.link:hover,.link:focus,.link:active {
    color: #33d1cc;
}


.navbar-brand {
   /* color: white; */
   color: aliceblue;
}
.navbar-brand:hover {

    color: rgb(67, 70, 85);
}
.link{
     text-decoration: none;
     color: aliceblue;

}
.link1{
     text-decoration: none;
    color: #030303;

}

.link1:hover{
    color:black ;
    cursor: pointer;
    text-decoration: underline;
}
.link:hover{
    color: #33d1cc;
    text-decoration: none;
}
.btn1{
    background-color: #4a6572;
}
.container .row .col-md-10 .card{
    background-color: #d8dde3;
}
/* .card-footer .footer .d-flex1 .d-flex2 .bi{
    color: aqua;
} */
.navbar .navbar-toggler  {

    color: aliceblue;
    font-size: 25px;
   
   
}
.navbar .navbar-toggler:focus {
box-shadow: none;
color: aliceblue;

}
button.btn.co1.btn-outline-success.ms-2:hover {
    color:#198754;

    background-color: transparent;

   border-color: #198754;
}
button.btn.btn-outline-danger:hover{
    color: red;
    background-color: transparent;

   border-color: red;

}button.btn.co1.btn-outline-success.ms-2:focus,
button.btn.btn-outline-danger:focus{

    outline: none;
    box-shadow: none;
}</style>