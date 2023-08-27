<template>



    <body>
      <!-- navbar -->
     
      <!-- end navbar -->
    
    
       <!-- start body -->
    
       <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Answer</title>
      <!-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"> -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="Answer.css">
    </head>
    
       <div class="container col-11 col-md-8 p-4 mt-5 main-content justify-content-center model-mask">
        <div class="row gx-5">
            <h1 class="mb-4"><button @click="addquestion">&times</button> #Ask about whatever you think of</h1>
    
    
            <form class="col-md-7 order-md-2 mt-lg-5">
                <div class="form-floating mb-3">
                    <textarea class="answer1 border-bottom border-2 w-100  " placeholder="  Write your question" name=""
                        id="" cols="30" rows="10" style=" border: none; background-color: #F2F3F5;
        border-radius: 10px; height: 75px;" v-model="body"></textarea>
    
                </div>
                <div class="form-floating">
                    <div class="form-group">
                                <label>category</label>
                                <select name="" class="form-control" v-model="category">
                                    <option value="0" disabled selected >choose category</option>
    
                                    <option :value="category.id" v-for="category in categories" :key="category.id">
                                     {{ category.name }}
                                    </option>
                                </select>
                            </div>
                   
                </div>
                <button type="submit" class="btn btn-primary col-12 col-md-5 my-4" @click.prevent="addquestionnew">Send</button>
            </form>
    
    
            <div class="col-md-5 order-md-1">
                <img class="img-fluid my-4 rounded   w-100" src="IMG/h2.png"
                    alt="Ilustração de uma pessoa logando em um site" style="max-height:155px;">
                <div class="link-container" @change="onimagechanged">
                    
                    <button type="submit" class="btn btn-primary col-12 col-md-5 my-4"
                        style="min-width: 122px;cursor: pointer;"><input class="pe-auto" type="file">Add a
                        picture</button>
                </div>
            </div>
    
    
    
        </div>
    </div>
      
    
    </body>
    
    
    </template>
    <script>
    
    export default{
    data(){return{
    questions:{},
    categories:{},
    body:'',
    image:'',
    category:null
    
    }},
    
    created(){
    this.getposts()
    this.getcategory()
    this.updateToken()

    }
    ,methods:{
        updateToken(){

let token =JSON.parse(localStorage.getItem('usertoken'));
this.$store.commit('setusertoken',token)
},
        addquestionnew(){
            let config ={
                    headers :{"content-type" : 'multipart/form-data'}
                }
                let formdata = new FormData();
                
                formdata.append('body',this.body)
                formdata.append('image',this.image)
                formdata.append('category',this.category)
                axios.post('/api/addPost',formdata,config)
    
                .then(res => {
                    this.title = '';
                    this.body = '';
                    this.category = '';
                    this.image = '';
        
                    })
    
    
        },    
    addquestion(){
        this.$emit('addquestion1')
    },
    onimagechanged(event){
    //console.log(event.target.files[0])
    this.image=event.target.files[0]
    },
    getposts(){
        axios
                    .get("/api/posts")
                    .then((res) => {
                        this.questions = res.data;
                         localStorage.setItem(
                             "questions",
                             JSON.stringify(this.questions)
                         );
                    })
                    .then((err) => console.log(err));
            
    }   
    ,getcategory(){
    
    
        axios.get('/api/categories').
        then(res => { this.categories = res.data }).then(err => console.log(err))
    
    } 
    }
    }
    </script>
    <style>
    .model-mask{
    background:rgba(0,0,0,.6);
    display: grid;
    place-items: center;
    z-index: 1;
    
    }
    .navbar {
        padding: 0 0;
        /* background-color: #445a7a; */
        background-color: #4a6572;
        box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%),
            inset 0 -1px 0 rgb(255 255 255 / 15%);
            /* text-decoration: none; */
          width: 100%;
            
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
    /* body */
    
    /* GENERIC CLASSES - BOOTSTRAP REPLACEMENT */
    button {
        background-color: #7a8591;
    
        border-color: inherit;
    }
    
    .btn-primary:hover {
        background-color: #423cbb;
    
        border-color: inherit;
    }
    
    /* CLASS CONTENT */
    .main-content {
        background-color: white;
    
        border-radius: 10px;
        box-shadow: 0px 0px 10px hsla(0, 0%, 0%, 0.25);
    }
    
    
    
    .form-control~label {
        color: #ccc;
    }
    
    .form-control:focus~label {
        color: #212529;
    }
    
    .form-control:focus {
        
        outline: none;
        box-shadow: none;
    }
    .form-select:focus {
        border: #4a6572;
        outline: none;
        box-shadow: none;
    }
    
    
    .link-container a:hover {
        color: #6C63FF;
    }
     input[type="file"]{
        position: absolute;
    
        opacity: 0;
     
    }
    .btn a{
        color: #ffffff;
    text-decoration: none;
    }
    .btn{
        color: #fff;
        background-color:#204354;
    }
    .btn a:hover{
        color: #ffffff;
    text-decoration: none;  
    cursor: pointer;
    }
    .btn:hover {
        color: #fff;
        background-color:#204354;
    
    }
    :focus-visible{
    
        outline: none;
    }
    inpu:focus{
       /* border: none; */
       box-shadow: none;
       outline: none;
        -webkit-transition: opacity .6s ease-in-out;
        -moz-transition: opacity .6s ease-in-out;
        -o-transition: opacity .6s ease-in-out;
        transition: opacity .6s ease-in-out;
    }
    
    .form-control:focus::-moz-placeholder {
        border: none;
       box-shadow: none;
        -webkit-transition: opacity .6s ease-in-out;
        -moz-transition: opacity .6s ease-in-out;
        -o-transition: opacity .6s ease-in-out;
        transition: opacity .6s ease-in-out;
    
    }
    
    .form-control:focus::-ms-input-placeholder {
        border: none;
       box-shadow: none;
        -webkit-transition: opacity .6s ease-in-out;
        -moz-transition: opacity .6s ease-in-out;
        -o-transition: opacity .6s ease-in-out;
        transition: opacity .6s ease-in-out;
    
    }
    
    button.btn.btn-primary.col-12.col-md-5.my-4:hover{
        color: #33d1cc;
        
    
       border-color:#33d1cc;
    
    }
    </style>
    