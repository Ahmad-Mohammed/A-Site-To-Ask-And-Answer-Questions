<template>


<navbar></navbar>


    <div class="container mt-5">
    
    <div class="row justify-content-center">
    
        <div class="col-md-10 ">
            <div class="card mb-3" style="background-color:  #d8dde3;">
                <div class="container  ms-auto mt-2  bg-body-tertiary ">
                    <div class="row    ">
    
                        <div class="nam  col-sm-11 col-md-10 w-100  d-flex  ">
                            <a class="  link1 h6 mt-1 fw-bold justify-content-end me-2 " href=""
                                style=" text-align: left;">{{ question.category.name }}</a>
    
                            <div class=" ms-auto d-flex ">
                                <div class="me-2 mt-1 ">
                                    <a class="link1  h6  fw-bold  mt-2"> {{ question.auther.name }}</a>
                                    <p class="d-flex  justify-content-end mt-1 me-3">{{question.added_at}} {{ question.id }}</p>
                                </div>
                                <!-- <a class="h6  mt-4 fw-bold justify-content-end me-2 ">Sajed zayton </a>
                    <p class="d-flex  justify-content-end me-2">date</p>
                     -->
    
                                <img src='/img/5.jpg'   class="  mt-2 mb-2  rounded-circle  "
                                    alt="bootcatch clean blog" style="     max-width: 60px;  height: 60px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row" style="    margin-top: -28px;">
                        <div class="col-md-3">
                            <img src="/img/header.jpg" class=" col-12 mr-3 rounded  pt-3"
                                style="width: 100%; height: 90%;" alt="bootcatch clean blog">
    
                        </div>
                        <div class="col-md-8">
    
    
    
    
    
    
                            <div class="">
                                <p class="  h6  lh-base pt-3">{{ question.body }} </p>
                                <div class="card-footer">
                                    <div class="footer  d-flex ">
    
                                        <div class="d-flex align-self-center ms-auto">
                                            <div class="d-flex ">
    
                                                <!-- dislike  -->
                                                <button type="button" class="btn btn-outline-danger"
                                                    style="height:35px; width: 65px;">
                                                    <div class="d-flex  " style="margin-bottom: 3px ; ">
                                                        <p style="font-size:13px ;">824 </p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="20" fill="currentColor"
                                                            class="bi bi-hand-thumbs-down ms-1" viewBox="2 0 12 12">
                                                            <path
                                                                d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                                                        </svg>
                                                    </div>
                                                </button>
    
                                                <button type="button" class="btn co1 btn-outline-primary  ms-2 "
                                                    style="height:35px; width: 65px;">
                                                    <div class="d-flex  " style="margin-bottom: 3px ; ">
                                                        <p style="font-size:13px ;">824 </p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="22" fill="currentColor"
                                                            class=" bi bi-hand-thumbs-up  bg-primery ms-1  "
                                                            viewBox="2 4 12 12">
                                                            <path
                                                                d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                                        </svg>
                                                    </div>
                                                </button>
    
    
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
   
                    <div class="d-flex justify-content-center w-100" >
    
                        <div class="col-12 col-md-10   mt-3">
    
                            <div class="container  w-100 mt-2   bg-bod
                            y-tertiary " style="height: 55px;" >
 
    
                        </div>
    
                        <form >
  <input type="hidden" v-model="question_id">
        <textarea class="answer1   w-100 h-100 " placeholder="  Add your answer" 
                                    id="" cols="10" rows="4" style=" border: none;background-color: #d9e7e7;
   
   border-radius: 10px;" v-model="body"></textarea>
 <button  class="bt15 rounded ms-2 mt-2 " style="background-color: #4a6572; color:#ffffff; width: 85px;height: 35px; "  @click.prevent="addanswer"  type="submit"> Add</button>
      
</form>
                            <!-- the show  -->
                            <div class="container     mt-3  bg-body-tertiary w-100 " v-for="details in answers" :key="details.id">
                                <div class="row  ms-3 ">
                                    <div class="col-1  d-flex text-align-item  justify-content-end  ">
                                        <img src="/img/5.jpg" class="img2  mt-2    rounded-circle "
                                            alt="bootcatch clean blog"
                                            style="     max-width: 55px;  max-height: 55px;">
    
    
                                    </div>
                                    <div class="nam  col-sm-11 col-md-10     " style="width: 75% ;">
                                        {{ details.auther.name }}
                                        <div class="to d-flex justify-content-end">
                                            <span class="name h6  fw-bold me-auto"></span>
    
                                            <div>
                                                <div class="warrn ">
                                                    <form action="">
    
                                                        <button @click="this.warning=details" @click.prevent="addwarn" >
                                                                Warrning</button>
                                                    </form>
    
    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="answer  w-100 " style="background-color: #e9eff1;">
                                            <span
                                                class=" ms-3  lh-sm  p-2 d-flex text-align-center justify-content-center"
                                                style=" font-size: 14px;">{{ details.body }}
                                               </span>
    
                                        </div>
                                        <div class="like-answer ">
    
                                            <div class="d-flex justify-content-start mt-2 ms-2">
                                                <!-- dislike  -->
                                                <button type="button" class="btn btn-outline-danger"
                                                    style="height:27px; width: 53px;">
                                                    <div class="d-flex  " style="margin-bottom: 3px ; ">
                                                        <p style="font-size:11px ;">82 </p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                            height="50" fill="currentColor"
                                                            class="bi bi-hand-thumbs-down ms-1" viewBox="0 8 15 44">
                                                            <path
                                                                d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                                                        </svg>
                                                    </div>
                                                </button>
    
    
                                                <!-- like -->
                                                <button type="button" class="btn co1 btn-outline-primary  ms-2"
                                                    style="height:27px; width: 53px;">
                                                    <div class="d-flex  " style="margin-bottom: 50px ; ">
                                                        <p style="font-size:11px ;">82</p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                            height="50" fill="currentColor"
                                                            class=" bi bi-hand-thumbs-up   bg-primery ms-1   "
                                                            viewBox="0 8  15 44">
                                                            <path
                                                                d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                                        </svg>
                                                    </div>
                                                </button>
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
    
    
        <categories></categories>
    
    
        </template>
        <script>
    import axios from 'axios';
    import navbar from './navbar.vue';
    export default{
        components:{

navbar

    },
    data(){
        return{
    
            question:{},
            body:'',
            question_id:''
,answers:[]
,warning:{}
,warns:[],
UUU:{}
        }
    
    },
  
    created(){
        // console.log(this.$route.params.slug)
        this.getpost()
     this.setuser()
    },
    methods:{
        addwarn(){
            let id=this.warning.id
           axios.post('/api/comment/'+id + '/inform',{ id})
           .then(res=>{console.log(res)}).then(err =>{console.log(err)})


        },


        setuser(){

        if(this.islogged){
              axios.get('/api/user')
                .then(res => {
                    this.$store.commit('setuser',res.data.user)

                })}
    },
  
         getpost(){
            axios.get('/api/posts/'+ this.$route.params.slug)
            .then(res =>{
         this.question = res.data
         this.question_id=this.question.id
         this.answers=this.question.answers

    
    
            })
   
   
            .catch(err =>{console.log(err)})
        },
        addanswer(){
let {body,question_id}=this
axios.post('/api/comment/create',{body,question_id}).then(res =>{

    this.answers.unshift(res.data);
}).then(err =>{console.log(err)})
this.body=''

    },
    islogged(){
    return this.$store.getters.islogged
}   
    },
    computed:{



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
    .navbar .navbar-nav .nav-link {
       text-decoration: none;
       /* color: aliceblue; */
       color: #ffffff;
    }
    .navbar .navbar-nav .nav-link:hover,
    .navbar .navbar-nav .nav-link:active,
    .navbar .navbar-nav .nav-link:focus,
    .link:hover,.link:focus,.link:active {
       color: #33d1cc;
    }
    
    .link {
         text-decoration:none;
        color: aliceblue;
    }
    .link:hover{
    
    color: aqua;
    
    }
    .link1 {
         text-decoration:none;
        color: black;
    }
    .link1:hover{
    cursor: pointer;
    text-decoration: underline;
    color: black;
    }
    
    .navbar-brand{
    
        color: white;
    }
    .navbar-brand:hover{
    
        color: aqua;
    }
    .navbar .navbar-toggler  {
    
       color: #ffffff;
       font-size: 25px;
    }
    .navbar .navbar-toggler:focus {
    box-shadow: none;
    }
    .img1{
       max-width: 95%;
       height: 205px;
       margin-top: 20px;
       box-shadow: 7px 8px 9px 2px rgb(179 167 167 / 75%);
    }
    .bi{
        /* background: transparent; */
    
        cursor: pointer;
       
    
     }
     :focus{
        outline: none;
    
     }
     .container ,.row ,.nam ,.answer {
        border-radius: 20px;
     }
    
     .answer1:focus::-webkit-input-placeholder{
        opacity: 0;
        -webkit-transition: opacity .6s ease-in-out;
        -moz-transition: opacity .6s ease-in-out;
        -o-transition: opacity .6s ease-in-out;
        transition: opacity .6s ease-in-out;
     }
     .answer1:focus::-moz-placeholder{
        opacity: 0;
        -webkit-transition: opacity .6s ease-in-out;
        -moz-transition: opacity .6s ease-in-out;
        -o-transition: opacity .6s ease-in-out;
        transition: opacity .6s ease-in-out;
    
     }
     .answer1:focus::-ms-input-placeholder{
        opacity: 0;
        -webkit-transition: opacity .6s ease-in-out;
        -moz-transition: opacity .6s ease-in-out;
        -o-transition: opacity .6s ease-in-out;
        transition: opacity .6s ease-in-out;
    
     }
     .answer1:focus:-webkit-input-placeholder{
        opacity: 0;
    
        -webkit-transition: opacity .6s ease-in-out;
        -moz-transition: opacity .6s ease-in-out;
        -o-transition: opacity .6s ease-in-out;
        transition: opacity .6s ease-in-out;
     }
     .warrninig{
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
     button.btn.co1.btn-outline-primary.ms-2:hover ,
     button.btn.co1.btn-outline-primary.ms-2:focus {
       color:#ffffff;
       background-color: #5130e7fa;
    
     
    }
    button.btn.btn-outline-danger:hover,
    button.btn.btn-outline-danger:focus{
       color: #ffffff;
       background-color: red;

    }
    button.btn.co1.btn-outline-primary.ms-2:focus,
    button.btn.btn-outline-danger:focus{
    
        outline: none;
        box-shadow: none;
    }
    button.btn.btn-outline-danger,
    button.btn.co1.btn-outline-primary.ms-2{
        border: none;
    }
.btn{
    border:none ;
}
    button{
        color: red;
       border:none;
       font-size: 15px;
       border: none;
       background-color: transparent;
    } 
    button.bt15.rounded.ms-2.mt-2:hover{
        color: #33d1cc;
    }
    </style>
    