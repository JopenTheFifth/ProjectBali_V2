<template>
    <div class="container">
        <p>This is where all the search results pop up</p>
        <h1>{{server.checkIn}}</h1>
    </div>
</template>





<script>
    //import serverbus which this component listens to
    import {serverBus} from "../app";




    export default{
        //this component expects values from the datePickerComponent
        props: {
            lodgeType: {
                type: String,
                required: false
            },
            checkIn: {
                type: Date,
                required: false
            },
            checkOut: {
                type: Date,
                required: false,
            },
            persons: {
                type: Number,
                required: false
            }
        },

        data(){
            return{
                server: null
            }
        },
        created(){
            //using the server bus.
            //We do this here because we want to listen to the event as soon as this component has been
            //created
            serverBus.$on('serverSelected', (server) => {
               this.server = server;
            });
        }
    }
</script>
