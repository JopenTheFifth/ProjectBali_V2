<template>
   <div>
       <h2>Lodges</h2>
       <div class="w-25">
           <div v-for="lodge in lodges" :key="lodge.id" class="w-100">
                {{lodge.name}} {{lodge.price_per_night}}
           </div>
       </div>
   </div>


</template>

<script>
    //in data we want to return out state

    export default {
       data(){
           return {
               lodges : [],
               lodge: {
                   id: '',
                   name: '',
                   surface: '',
                   price_per_night: '',
                   lodge_type_id: ''
               },
               lodge_id: '',
               edit: false
           }
       },

        //runs automatically when the page loads
        created(){
          this.getLodges();
        },

        methods:{
           //fetches all data from the api route.
           // fetchLodges(){
           //     fetch('api/lodge').then(res => res.json()).then(res => {
           //         //fills the empty data array with the api data.
           //         this.lodges = res.data;
           //         console.log(res.data);
           //     })
           // },

            getLodges(){
               axios.get('/api/lodge').then((res) => {
                   this.lodges = res.data.data;
                   console.log(res.data);
               }).catch((error) => {
                   console.log(error);
               })
            }
        }
    }
</script>
