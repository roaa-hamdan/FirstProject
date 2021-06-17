<template>
    <div class="row justify-content-center mt-8">
        <div class="col-md-6">
        <div class="card mx-4 mb-0"><div class="card-body p-4">
            <form class="">
                <h1>Add New User</h1>
                <p class="text-muted">
                    Create New User</p>
            <div role="group" class="form-group"><div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" role="img" class="c-icon">
                    <path fill="var(--ci-primary-color, currentColor)" d="M411.6,343.656l-72.823-47.334,27.455-50.334A80.23,80.23,0,0,0,376,207.681V128a112,112,0,0,0-224,0v79.681a80.236,80.236,0,0,0,9.768,38.308l27.455,50.333L116.4,343.656A79.725,79.725,0,0,0,80,410.732V496H448V410.732A79.727,79.727,0,0,0,411.6,343.656ZM416,464H112V410.732a47.836,47.836,0,0,1,21.841-40.246l97.66-63.479-41.64-76.341A48.146,48.146,0,0,1,184,207.681V128a80,80,0,0,1,160,0v79.681a48.146,48.146,0,0,1-5.861,22.985L296.5,307.007l97.662,63.479h0A47.836,47.836,0,0,1,416,410.732Z" class="ci-primary">
                        </path>
                        </svg>
                        </span>
                        </div>
                        <input id="uid-54wvixuq1e" type="text" placeholder="name" v-model="name"  class="form-control">
                        </div>
                        </div>
                        <div role="group" class="form-group"><div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                                </div>
                                <input id="uid-2jy4u9449jn" type="text" placeholder="address" v-model="address" class="form-control">
                               </div>
                    </div>
                    <div role="group" class="form-group"><div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" role="img" class="c-icon">
<path fill="var(--ci-primary-color, currentColor)" d="M449.366,89.648l-.685-.428L362.088,46.559,268.625,171.176l43,57.337a88.529,88.529,0,0,1-83.115,83.114l-57.336-43L46.558,362.088l42.306,85.869.356.725.429.684a25.085,25.085,0,0,0,21.393,11.857h22.344A327.836,327.836,0,0,0,461.222,133.386V111.041A25.084,25.084,0,0,0,449.366,89.648Zm-20.144,43.738c0,163.125-132.712,295.837-295.836,295.837h-18.08L87,371.76l84.18-63.135,46.867,35.149h5.333a120.535,120.535,0,0,0,120.4-120.4v-5.333l-35.149-46.866L371.759,87l57.463,28.311Z" class="ci-primary"></path>                            
                            </svg>
                            </span>
                            </div>
                            <input id="uid-2yihx736e3f" type="text" placeholder="phone" v-model="phone" class="form-control">
                            </div>
                            </div>
                            <div role="group" class="mb-4 form-group">
                                <div class="input-group"><div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" role="img" class="c-icon">
<path fill="var(--ci-primary-color, currentColor)" d="M411.6,343.656l-72.823-47.334,27.455-50.334A80.23,80.23,0,0,0,376,207.681V128a112,112,0,0,0-224,0v79.681a80.236,80.236,0,0,0,9.768,38.308l27.455,50.333L116.4,343.656A79.725,79.725,0,0,0,80,410.732V496H448V410.732A79.727,79.727,0,0,0,411.6,343.656ZM416,464H112V410.732a47.836,47.836,0,0,1,21.841-40.246l97.66-63.479-41.64-76.341A48.146,48.146,0,0,1,184,207.681V128a80,80,0,0,1,160,0v79.681a48.146,48.146,0,0,1-5.861,22.985L296.5,307.007l97.662,63.479h0A47.836,47.836,0,0,1,416,410.732Z" class="ci-primary"></path>                                        </svg>
                                        </span>
                                        </div>
              <input id="uid-sc5hqwnzwh" type="text" placeholder="id"  v-model="id" class="form-control">
           </div></div>
             <button type="button" class="btn btn-secondary btn-block"  @click.prevent="getData"      >
                                            Add User</button>
                                            </form>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
</template>


<script>
   import axios from 'axios';
export default {
    data(){
        return{
            name:'',
            address:'',
            id:'',
            phone:''
        }
    },
    methods:{
        getData(){
            axios.get('http://127.0.0.1:8000/api/Save/'+this.name+'/'+this.address+'/'+this.id+'/'+this.phone).then((res) =>{
//this.users=res.data;
            
            }).catch((error) =>{
                                console.log(error);
            })
        }
    }
}
</script>