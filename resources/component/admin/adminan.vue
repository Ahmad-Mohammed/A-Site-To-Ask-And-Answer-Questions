<template>
    
    <navbar/>

<!--     
    <div class="container-fluid justify-content-center d-flex mt-4" v-for="array in arrays" :key="array">
        <div class="row justify-content-center d-flex ">


            <div class="shad d-flex justify-content-center col-12  col-md-9  mb-lg-4  mt-3 ">
                <div class="container-fluid   bg-body-tertiary mt-3 ">
                    <div class="row  ms-3 ">
                        <div class="col-1  d-flex text-align-item  justify-content-end  ">
                            <img src="/img/5.jpg" class="img2  mt-2    rounded-circle " alt="bootcatch clean blog"
                                style="     max-width: 55px;  max-height: 55px;">


                        </div>
                        <div class="nam  col-sm-12 col-md-10     " style="width: 75% ;">
                            <div class="to d-flex justify-content-end">
                                <span class="name h6  fw-bold me-auto"></span>

                                <div>
                                    <div class="warrn  me-md-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16"
                                            style="color: rgb(168, 36, 36);">
                                            <path
                                                d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                            <path
                                                d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                        </svg>
                                        <span class="warrninig  ">Warrn: <span> 25 </span> </span>


                                    </div>
                                </div>
                            </div>
                            <div class="answer  w-100 rounded " style="background-color: #e9eff1;">
                                <span class="h6 ms-3   d-flex text-align-center justify-content-center">
                                    At vitae doloremque natus voluptas hic voluptatum dolorum. A consequuntur accusantium vel atque. Similique eaque voluptatem ut iure quae quis in itaque. Exercitationem dolore ad aspernatur totam ab aliquid.</span>

                            </div>
                            <div class="card-footer">
                                <div class="footer  d-flex justify-content-end ">

                                    <div class="d-flex  me-auto  ">

                                        <button class="btn1  me-sm-2  p-1 p-lg-2 border-0  rounded " >
                                                Delete</button>


                                        <button class="btn1  ms-3 ms-lg-4  p-1 p-lg-2  border-0 rounded "
                                            >Ignore</button >
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>





   
            

        </div>
    
    </div> -->

  
    <div class="container mt-5" v-for="question in questionsinform" >
        <div class="row justify-content-center" >

            <div class="col-md-10 ">
                <div class="card mb-3" style="background-color:  #d8dde3;">
                    <div class="container  ms-auto mt-2  bg-body-tertiary ">
                        <div class="row    ">

                            <div class="nam  col-sm-11 col-md-10 w-100  d-flex  ">
                                <a class="  link1 h6 mt-1 fw-bold justify-content-end me-2 " href=""
                        style=" text-align: left;">{{question.category.name}}</a>

                                <div class=" ms-auto d-flex ">
                                    <div class="me-2 mt-1 ">
                                        <a class="link1  h6  fw-bold  mt-2">{{question.auther.name}}</a>
                                        <p class="d-flex  justify-content-end mt-1 me-3">{{question.added_at}}</p>
                                    </div>
                                    <!-- <a class="h6  mt-4 fw-bold justify-content-end me-2 ">Sajed zayton </a>
                        <p class="d-flex  justify-content-end me-2">date</p>
                         -->

                                    <img src="/img/5.jpg" class="  mt-2 mb-2  rounded-circle  "
                                        alt="bootcatch clean blog" style="     max-width: 60px;  height: 60px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row" style="    margin-top: -28px;">
                            <div class="col-md-3">
                                <img src="/img/تطوير الذات.jpeg" class=" col-12 mr-3 rounded  pt-3"
                                    style="width: 100%; height: 90%;" alt="bootcatch clean blog">

                            </div>
                            <div class="col-md-8">






                                <div class="">
                                    <p class="  h6  lh-base pt-3"> {{ question.body }}</p>
                                    <div class="card-footer">
                                        <div class="footer  d-flex ">

                                            <div class="d-flex align-self-center ms-auto">
                                                <div class="d-flex ">

                                                    <!-- dislike  -->
                                                


                                                    <!-- like -->
                                                 




                                                </div>
                                                <!-- <span class="font-italic">Posted by <a href="#">Bootcatch Team</a> on <span class="text-primary">
                                September 24, 2019</span></span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end card -->

                        <!-- answer  -->
                        <div class="d-flex justify-content-center w-100">

                            <div class="col-12 col-md-10   mt-3">

                                <div class="container  w-100 mt-2   bg-body-tertiary " style="height: 55px;">


                                   
                                </div>


                                <!-- the show  -->
                                <div class="container     mt-3  bg-body-tertiary w-100 " v-for="answer in question.answers">
                                    <div class="row  ms-3 " v-if="answer.is_inform">
                                        <div class="col-1  d-flex text-align-item  justify-content-end  ">
                                            <img src="/img/5.jpg" class="img2  mt-2    rounded-circle "
                                                alt="bootcatch clean blog"
                                                style="     max-width: 55px;  max-height: 55px;">



                                        </div>
                                        <div class="nam  col-sm-11 col-md-10     " style="width: 75% ;" >
                                            <div class="to d-flex justify-content-end">
                                                <span class="name h6  fw-bold me-auto"></span>

                                              
                                            </div>
                                            <div class="answer  w-100 " style="background-color: #e9eff1;">
                                                <span
                                                    class=" ms-3  lh-sm  p-2 d-flex text-align-center justify-content-center"
                                                    style=" font-size: 14px;">
                                                     {{ answer.body }}
                                                </span>
                                            </div>
                                            <div class="like-answer ">

                                                <div class="d-flex justify-content-start mt-2 ms-2">
                                                    <!-- dislike  -->
                                                    <button class="btn1  ms-3 ms-lg-4  p-1 p-lg-2  border-0 rounded "
                                                    @click.prevent=" this.ID=answer.id  , ignore()" >Ignore</button >


                                                    <!-- like -->
                                                    <button class="btn1  ms-3 ms-lg-4  p-1 p-lg-2  border-0 rounded "
                                                    @click.prevent=" this.IDDelete=answer.id  , Delete()">Delete</button >
                                                </div>
                                                <!-- <span class="font-italic">Posted by <a href="#">Bootcatch Team</a> on <span class="text-primary">
September 24, 2019</span></span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end answer -->


                            </div>

                        </div>









                    </div>
                </div>
            </div>
        </div>
    </div>




</template>
<script>
import { createApp } from 'vue';
import axios from 'axios';
import navbar from '../navbar.vue';
export default{
components:{
navbar,

},
data(){return{
    arrays:[],
    questions:{},
    questionsinform:[],
    ID:null,
    IDDelete:null
}},

created(){
this.arrays=JSON.parse(localStorage.getItem('warning'))
this.addpost();

},
methods:{
Delete(){

axios.post('/api/admin/comment/'+ this.IDDelete +'/rejeter',this.IDDelete).then(res =>console.log(res)).then(err =>console.log(err))

},    
ignore(){
    let id=this.ID
axios.post('/api/admin/comment/'+ this.ID +'/ignor',this.ID).then(res => {console.log(res)})
.then(err => {console.log(err)})
},
    // addcomment(){

    //     axios.get("/api/post/" +ques)
    // },
    addpost(){
        axios.get("/api/posts")
                .then((res) => {
                    this.questions = res.data;
// console.log(this.questions)
                    
let k=0;
for(const question in this.questions){

// console.log(this.questions[question].answers)

        for(const answer in this.questions[question].answers){
            

                        if(this.questions[question].answers[answer].is_inform && question){
                        this.questionsinform[k]=this.questions[question]
k++;

break;
}

        }
        
    }
                       
})
                .then((err) => console.log(err));
  


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
.navbar .navbar-toggler  {

    color: aliceblue;
    font-size: 25px;
   
   
}
.navbar .navbar-toggler:focus {
box-shadow: none;
color: aliceblue;

}
.btn1{
    background-color: #4a6572;
}/* body */


.bi{ 
    /* background: transparent; */
    
    cursor: pointer;
     
 }  

:focus {
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0100px;
     outline: none;
     box-shadow: none;
     border-top-right-radius: 50%;
}
.form-control:focus {
     border: 0;
    outline: none;
    box-shadow: none;

}
.warrninig{
    cursor: pointer;
    text-decoration:none;
    color: rgb(168, 36, 36);
 }
 .warrninig:hover{
    text-decoration:underline ;
    color: rgb(168, 36, 36);
 }
 .name:hover{
    cursor: pointer;
    text-decoration: underline;
    transition: all .9s ease-in-out;
 }
 .btn1 a{
    color: #ffffff;
text-decoration: none;
}
.btn1{
    background-color:#204354;
}
.btn1 a:hover{
    color: #33d1cc;
text-decoration: none;
}
.shad{
    box-shadow: 0 0rem 2rem rgba(0,0,0,.175)!important;
}
</style>