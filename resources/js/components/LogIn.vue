<template>
        
 

<div  class="d-flex   justify-content-center pt-8 ">
<button type="button" class="btn btn-dark btn-block col-sm-3 col-lg-2 "  @click.prevent="getDataa">
    Get Users data
</button>
</div>
     <input id="uid-54wvixuq1e" type="text" placeholder="id" v-model="id" class="form-control">


<div class= " mt-20  flex justify-center " >
  
 
</div>

</template>
<script>
   import axios from 'axios';
export default {
    data(){
        return{
            user:1,
            id:0,
            name1:'r',
            users:[]
        }
    },
    methods:{
        getDataa(){
            axios.get('http://127.0.0.1:8000/api/updateData/'+this.id).then((res) =>{
this.users=res.data;
console.log(this.users);
            
            }).catch((error) =>{
                                console.log(error);
            })
        }
    }
}
</script>