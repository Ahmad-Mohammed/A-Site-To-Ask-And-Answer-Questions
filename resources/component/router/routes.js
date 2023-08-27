import { createRouter,createWebHistory } from "vue-router";
import Home from '../Home.vue'
import adminan from '../admin/adminan.vue'

const router= createRouter({
    hashbang:false,
    history:createWebHistory(import.meta.env.BASE_UR),
    routes:[
{
    path:'/',
    name:'Home',
    component:Home
},
{
    path:'/post/:slug',
    name:'questionsdetails',
    component:()=>import('../quetionsdetails.vue')
},
{ path: '/category/:slug/posts', 
name: 'categoriesposts',
component:()=>import('../categoriesposts.vue')
},
{ path: '/test', 
name: 'test',
component:()=>import('../test.vue')
},

{ path: '/test/:id', 
name: 'Editquestion',
component:()=>import('../Editquestion.vue')
},
{
path:'/navbar',
name:'navbar',
component:()=>import('../navbar.vue')



},
{
    path:'/navbar/adminan',
    name:'adminan',
    component:()=>import('../admin/adminan.vue')
    
    
    
    },
    {
        path:'/navbar/adminqu',
        name:'adminqu',
        component:()=>import('../admin/adminqu.vue')
        
        
        
        },
{path:'/userquestions/:id',
name:'userquestions',
component: ()=>import('../userquestions.vue')
}    
    
    ]
})
export default router
