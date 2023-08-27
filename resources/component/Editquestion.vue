<template>
    <!-- Edit Modal HTML -->
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
     
      <link rel="stylesheet" href="Answer.css">
    </head>
    
       <div class="container col-11 col-md-8 p-4 mt-5 main-content justify-content-center model-mask">
        <div class="row gx-5">
            <h1 class="mb-3"> #Update your Question</h1>
    
    
            <form class="col-md-7 order-md-2 mt-lg-5">
                <div class="form-floating mb-3">
                    <input class="answer1 border-bottom border-2 w-100  " placeholder="  Write your question" name=""
                        id="" cols="30" rows="10" style=" border: none; background-color: #F2F3F5;
        border-radius: 10px; height: 75px;" v-model="PostToEdit.body" />
    
                </div>
                <div class="form-floating">
                    <div class="form-group">
                                <label>category</label>
                                <select name="" class="form-control"  v-if="PostToEdit.category" v-model="PostToEdit.category.id">
                                    <option value="0" disabled selected >choose category</option>
    
                                    <option :value="category.id" v-for="category in categories" :key="category.id">
                                     {{ category.name }}
                                    </option>
                                </select>
                            </div>
                
                            <button type="submit" class="btn btn-primary col-12 col-md-5 my-4" @click.prevent="updatePost">Send</button>

                </div>
                
            </form>
    
    
            <div class="col-md-5 order-md-1">
                <img class="img-fluid my-4 rounded   w-100" src="/img/h2.png "
                    alt="Ilustração de uma pessoa logando em um site" style="max-height:155px;">
                <div class="link-container" >
                    
                    <button type="submit" class="btn btn-primary col-12 col-md-5 my-4"
                        style="min-width: 122px;cursor: pointer;"><input type="file" class="form-control" required @change="onImageChanged" >
Add a
                        picture</button>
                </div>
            </div>
    
    
    
        </div>
    </div>
      
    
    </body>
    
   
  </template>
  
  <script>
  export default {
  data(){
          return {
              categories : [],
          }
      },
      created(){
          this.getCategories();
      },
      methods:{
          getCategories(){
            axios.get('/api/categories').then(res => { this.categories = res.data 
      console.log(res.data)}).then(err => console.log(err))
          },
          onImageChanged(event){
              //console.log(event.target.files[0])
              this.PostToEdit.thumbnail = event.target.files[0]
              console.log(this.PostToEdit.thumbnail)
          },
          updatePost(){
              let config ={
                  headers :{"content-type" : 'multipart/form-data'}
              }
              console.log(this.PostToEdit)
              let formdata = new FormData();
              formdata.append('id',this.PostToEdit.id)
              formdata.append('body',this.PostToEdit.body)
              formdata.append('thumnail',this.PostToEdit.thumbnail)
              formdata.append('category',this.PostToEdit.category.id)
              for( const value  of formdata.values())
              console.log(value)

              axios.post('/api/updatePost/' + this.PostToEdit.id,formdata,config)
              .then(res => {
                  console.log(res)
                  /* this.title = '';
                  this.body = '';
                  this.category = '';
                  this.image = ''; */
             
              })

  
          }
  
      },
      computed:{
          PostToEdit(){
              return this.$store.getters.PostToEdit;
          }
      }
  
  }
  </script>
  
  <style>
  
  </style>