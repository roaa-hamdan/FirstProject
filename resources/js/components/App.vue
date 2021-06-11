<template>
           <div class="flex justify-center	items-center h-30 bg-blue-300	">
             <h1 >
                Employees data
             </h1>
           </div>
 
     <div class="flex justify-center	items-center mt-20	">

<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded " @click.prevent="getData" type="submit">
Get Employees data
</button>
</div>
<div class= " mt-20  flex justify-center " >
  
  <table  >
    <tr class="bg-blue-50" >

      <th>
        User Name
      </th>
       <th>
       Phone Number
      </th>
       <th>
        User Id
      </th>
    </tr>
      <tr v-for="(user,i) in users" :key="i"   v-bind:class = "(i%2==0)?'bg-blue-200':'bg-blue-50'">
       <td>{{ user.name }}</td> 
              <td>{{ user.phone }}</td> 
       <td>{{ user.id }}</td> 

    </tr>
  </table>
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
                                console.log(error);

            })
        }
    }
}
</script>

