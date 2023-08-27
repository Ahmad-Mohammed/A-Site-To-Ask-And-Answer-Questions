<template>

<navbar/>

<div class="container mt-5" v-for="question in questions">
    <div class="row justify-content-center" v-if="question.status==1">

        <div class="col-md-11 ">
            <div class="card mb-3">

                <div class="container  ms-auto mt-2  bg-body-tertiary ">
                    <div class="row    ">

                        <div class="nam  col-sm-11 col-md-10 w-100  d-flex  ">
                            <a class="  link1 h6 mt-1 fw-bold justify-content-end me-2 " href=""
                                style=" text-align: left;">{{question.category.name}}</a>

                            <div class=" ms-auto d-flex ">
                                <div class="me-2 mt-1 ">
                                    <a class="link1  h6  fw-bold  mt-2">{{question.auther.name}} </a>
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
                            <!-- :src="'/img/'+ question.thumbnail"  -->

                                                        <img src="../../../20-5-2203/IMG/pexels-monstera-7412034.jpg" class=" col-12 mr-3 rounded  pt-3"
                                style="width: 100%; height: 90%;" alt="bootcatch clean blog">

                        </div>
                        <div class="col-md-8">

                            <div class="">
                                <p class="  h6  lh-base pt-3"> {{question.body}}</p>
                                    <div class="card-footer">
                                        <div class="footer  d-flex ">
                                            <div class="drop align-self-center ms-lg-4 w-50 ">
                                                <select class="form-select rounded-pill    form-select-sm"
                                                    aria-label=".form-select-sm example" v-model="category1" >
                                                    <option value="0" disabled selected  >Choose a category</option>
                                                    <option :value="category.id" v-for="category in categories" :key="category.id"  >{{category.name}}</option>
                                                    
                    
                                                </select>
                                            </div>
                                            <div class="d-flex  ms-auto">
                                                <button class="link btn1 me-sm-2  ms-1 m-lg-2 p-1 p-lg-2 border-0  rounded d-flex  "
                                                
                                                @click.prevent="this.deletion=question.slug" @click="deleteposts"  >Delete</button>
                                                
                                                <button class="link btn1  ms-1 m-lg-2 p-1 p-lg-2 border-0  rounded d-flex  "
                                                 @click="approvmentposts(question.slug)  "  >Approvment</button>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end card -->

                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import navbar from '../navbar.vue';
export default{
data(){ return{
questions:{},
approvment:null,
categories:{},
category1:null,
deletion:null,

}},
components:{
    navbar,
},
    created(){

    this.getposts();
this.getcategory();

},


methods:{
putcat(id){

},
  deleteposts(){
axios.post('/api/admin/post/'+this.deletion+'/rejeter',this.deletion).then(res =>console.log(res.data))

  },  
    approvmentposts(value){
        this.approvment=value
        // category1=this.categories.find(this.category1)
        axios.post('/api/admin/post/'+ this.approvment+ '/consent',this.approvment).then(res=>console.log(res.data)).then(err=>console.log(err))

    },
    getcategory(){


axios.get('/api/categories').
then(res => { this.categories = res.data }).then(err => console.log(err))

} ,
    getposts(page=1) {
            axios
                .get("/api/posts")
                .then((res) => {
                    console.log(res.data)
                    this.questions = res.data;
                     localStorage.setItem(
                         "questions",
                         JSON.stringify(this.questions)
                     );
                })
                .then((err) => console.log(err));
        },
}

}

</script>