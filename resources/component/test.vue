<template>
     <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

   
</head>
<navbar/>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <h2 class="font_size">All Posts</h2>
                    <table class="center">
                        <tr class="th_color">
                            <th class="th_deg"> body</th>
                            <th class="th_deg">category</th>
                            <th class="th_deg"> thumbnail</th>
                            <th class="th_deg" > Delete</th>
                            <th class="th_deg"> Edit</th>
                        </tr>
                        <tr class="td_color" v-for="question in questions">
                            
                            <td >
                                {{ question.body }}     
                            </td>
                            <td>{{ question.category.name }}</td>
                            <td>
                                <img class="img_size" :src="'/img/' +question.thumbnail" alt="">
                            </td>
                            <td>
                                <button  class="btn btn-danger" @click="this.ID_question=question.id ,deletequestion()" >Delete</button>
                            </td>
                            <td>
                                <button  class="btn btn-success" @click="Editquestion(question)"><RouterLink :to="'/test/'+  question.id " >Edit</RouterLink></button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
</template>


<script>
import axios from 'axios';
import navbar from './navbar.vue';
export default{
    data(){
        return{
questions:{},
 a:{},
 ID_question:null

    }},
components:{
    navbar
},
mounted(){
    this.getquestions()

    this.updateToken()
 
},


methods:{
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
                    console.log(res)
                    this.title = '';
                    this.body = '';
                    this.category = '';
                    this.image = '';
        
                    })
    
    
        },    
        onimagechanged(event){
    //console.log(event.target.files[0])
    this.image=event.target.files[0]
    },
deletequestion(){ 
    axios.post('/api/deletePost/'+this.ID_question ,this.ID_question)
        .then(res =>{this.questions=res.data}).then(err=>console.log(err))
},
    getquestions(){
        this.a=this.$store.state.user
        axios.get('/api/auther/'+this.a.id +'/posts')
        .then(res =>this.questions=res.data).then(err=>console.log(err))
}  
,
Editquestion(question){
this.$store.commit('Editquestion',question)

},
updateToken(){
       let token =JSON.parse(localStorage.getItem('usertoken'));
       this.$store.commit('setusertoken',token)
     }

}


}

</script>
<style>
body {
    /* background-color: rgb(213, 226, 226); */
}


.font_size {
    font-size: 40px;
    padding-top: 20px;
    text-align: center;
}

.center {
    margin: auto;
    width: 50%;
    text-align: center;
    margin-top: 40px;
    border: 2px solid white;
}

.img_size {
    width: 100px;
    height: 100px;
}

.th_color {
    background: skyblue;
}

.td_color {
    background: rgb(195, 210, 216);
}

.th_deg {
    padding: 20px;
}
</style>