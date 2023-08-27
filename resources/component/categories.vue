<template >
  <!-- <ul class="dropdown-menu " id="dropdownMenuButton1" >
      <li v-for="category in categories"  >

        
        <div v-show='category.id<8&&allow' class="dropdown-item" @click="value = category" >
          <RouterLink :to="'category/' + category.slug + '/posts'">{{ category.name }}</RouterLink>
        </div>
      </li>
      <div @click.prevent="allowed" style="color:cadetblue;" >show more    </div>  
      <li v-show="!allow" v-for="category in categories" :key="category.id" >
        <div v-show='category.id>8' class="dropdown-item" @click="value = category" >
          <RouterLink :to="'category/' + category.slug + '/posts'" >{{ category.name }}</RouterLink>
        </div>
      </li>
    
    </ul>
  
   -->
    <!-- <button class=" btn btn-light  rounded-pill dropdown-toggle"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
      aria-expanded="false" style="width: 90%; height: 38px;"  >
Select Category    </button> -->
    
<!-- <ul class="dropdown-menu " id="dropdownMenuButton1" >

  <li v-for="category in categories"  >

        
        <div v-show="category.id <8 && allow" class="dropdown-item" @click="value = category" >
          <RouterLink :to="'category/' + category.slug + '/posts'">{{ category.name }}</RouterLink>
        </div>
      </li>
      <div @click.prevent="allowed" style="color:cadetblue;" >show more    </div>  
      <li v-show="!allow" v-for="category in categories" :key="category.id" >
        <div v-show='category.id>8' class="dropdown-item" @click="value = category" >
          <RouterLink :to="'category/' + category.slug + '/posts'" >{{ category.name }}</RouterLink>
        </div>
      </li>
    
    </ul>
  
  </div> -->



   <select  class="form-select rounded-pill   " aria-label=".form-select-sm example"  v-on:change="changeRoute($event)" >
              <option selected >Select Category</option>

              <option   v-for="category in categories" :value="category.slug">  
{{ category.name }}
              </option>
              </select> 
</template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      showtoggle: false,
      categories: [],
      value: 'B',
      allow:true

    }
  },
  created() {
    this.getcategories();


  },
  methods: {

    changeRoute(e) {
      this.$router.push("/category/" + e.target.value +"/posts");
      // this.$router.push("/b" + e.target.value); not working....
    },
    toggle() {
      this.showtoggle = !this.showtoggle


    },
    getcategories() {

      axios.get('/api/categories').then(res => { this.categories = res.data 
      }).then(err => console.log(err))
    },
allowed(){

this.allow=!this.allow

}


  }
}





</script>