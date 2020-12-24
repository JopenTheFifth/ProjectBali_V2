<template>


<div class="card">
    <div class="card-title">
        <i>Find lodges</i>
    </div>
    <hr />
    <div class="card-body">
        <form>

            <div >
                <label for="lodgeType" class="float-left">Lodge type:</label>
                <select v-model="searchData.type"  class="form-control" id="lodgeType">
                    <option disabled value="">Choose a lodge type</option>
                    <option  class="form-control" v-for="type in lodgeTypes" :value="type.name"  >{{type.name}}</option>
                </select>

            </div>

            <div class="form-entry" >
                <label for="check-in" class="float-left">Check-in date:</label>
                <input  v-model="searchData.checkIn" class="form-control" id="check-in" type="date">
            </div>

            <div class="form-entry" >
                <label for="check-out" class="float-left">Check-out date:</label>
                <input  v-model="searchData.checkOut" class="form-control" id="check-out" type="date">
            </div>

            <div class="form-entry">
                <label for="persons" class="float-left">Persons:</label>
                <input  v-model="searchData.persons" class="form-control" id="persons" type="text">
            </div>

        </form>
    </div>
</div>






</template>



<script>

    // use the server bus in the component we want to send data from.
    //     first we need to import it.
    import {serverBus} from "../app";

    export default{


        data(){
            return{
                lodgeTypes : [],
                searchData: {
                    type: '',
                    checkIn: '',
                    checkOut: '',
                    persons: ''
                },
                errors: []
            }
        },

        //other hooks include: mounted, updated, destroyed
        created() {
            this.getLodgeTypes();
        },

        computed: {
            //checks if any of the form data has been changed.
          onTypeChange() {
              return this.searchData.type;
          },
            onPersonChange(){
              return this.searchData.persons;
            },
            errorOccurred(){
              return this.errors;
            },
        },

        watch: {
             onTypeChange() {
                 //Send msg to searchResultComponent
                 this.dateSelected();
             },
            onPersonChange(){
                 this.dateSelected();
            },
            errorOccurred(){
                 this.sendError();
            }
        },

        methods:{
            dateSelected : function(){
                //use the server bus
                serverBus.$emit('dateSelected', this.searchData);
            },
            sendError: function(){
                serverBus.$emit('errorOccurred', this.errors);
            },


            getLodgeTypes(){
                axios.get('api/lodgeTypes').then((res) => {
                    this.lodgeTypes = res.data.data;
                    console.log(res.data);
                })
            },
            redirect(){
              this.$router.push('/lodges');
            },
           checkForm: function(e) {
                if(this.searchData.checkIn && this.searchData.persons
                &&this.searchData.checkOut && this.searchData.type){
                    return true;
                }
                //reset error list
               this.errors = [];

                if(!this.searchData.type){
                    this.errors.push('type required!');
                }

               if(!this.searchData.persons){
                   this.errors.push('Person field required!');
               }

               if(!this.searchData.checkIn){
                   this.errors.push('Check in date required');
               }

               if(!this.searchData.checkOut){
                   this.errors.push('Check out date required');
               }

               e.preventDefault();
           }

        }
    }

</script>



<style scoped>
 input, select, option{
     height: 2.5rem;
 }


 label{
     font-weight: bold;
     font-size: 0.9rem;
     color:#353337;;
 }

    input, label,select{
        display: block;
    }

    input,select{
        font-size: 0.8rem;

    }

    .card{
        /*background-color: #FFCDB2;*/
        background-color: #E1C97C;
        text-align: center;
        color: #6D6875;
    }

    hr{
        height: 0.05rem;
        width: 95%;
        margin: auto;
        background-color: #E1C97C !important;
    }

    .card-title{
        font-size: 1.5rem;
        text-transform: uppercase;
        padding: 1rem;
        font-weight: bold;
        color: #353337;
    }

    .form-entry{
        padding-top:1rem;
    }
</style>
