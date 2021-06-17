<template>
        
 

<div  class="d-flex   justify-content-center pt-8 ">
<button type="button" class="btn btn-dark btn-block col-sm-3 col-lg-2 "  @click.prevent="getData">
    Get Users data
</button>
</div>
<div class="  d-flex   justify-content-center"  >
    <div class="  d-flex   justify-content-center card  col-sm-5 col-lg-6 m-2 pt-8">

<header class="card-header" >User Information</header>
<div class="card-body">
    
    <div data-v-13aa1aae="" class="position-relative table-responsive" v-bind:class = "(users.length==0)?'d-none':'d-flex'">
        <table data-v-13aa1aae="" class="table"  ><thead data-v-13aa1aae="">
            <tr data-v-13aa1aae="">
                <th data-v-13aa1aae="" class="" style="vertical-align: middle; overflow: hidden;">
                    <div data-v-13aa1aae="">
                        Username</div>
                        <!----></th>
                        <th data-v-13aa1aae="" class="" style="vertical-align: middle; overflow: hidden;">
                            <div data-v-13aa1aae="">Phone Number
                                </div><!----></th><th data-v-13aa1aae="" class="" style="vertical-align: middle; overflow: hidden;">
                                    <div data-v-13aa1aae="">User Id
                                        </div><!----></th>
                                      
                                                </tr><!----></thead>
                                                <tbody data-v-13aa1aae="" class="position-relative">
                                                          <tr v-for="(user,i) in users" :key="i"  >
       <td>{{ user.name }}</td> 
              <td>{{ user.phone }}</td> 
       <td>{{ user.id }}</td> 

    </tr>
                                               
        
                 <!----><!----></tbody><!----></table><!----></div>
</div>

</div>



</div>


<div class= " mt-20  flex justify-center " >
  
 
</div>

</template>
<script>
   import axios from 'axios';
export default {
    data(){
        return{
            users:[],
        }
    },
    methods:{
        getData(){
            axios.get('http://127.0.0.1:8000/api/getdataa').then((res) =>{
this.users=res.data;
            
            }).catch((error) =>{
 alert('no user with this id ')            })
        }
    }
}
</script>