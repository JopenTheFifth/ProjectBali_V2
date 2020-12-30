<template>
    <div id="wrapper" class="container">

        <form id="confirmBookingForm">


            <div class="formBox">
                <h5 class="p-3 title">Step 1 - Personal information</h5>
                <hr class="formHr" />

                <div class="form-group">

                    <label for="firstName">First name</label>
                    <input type="text" id="firstName" class="form-control">
                </div>

                <div class="form-group">

                    <label for="lastName">Last name</label>
                    <input type="text" id="lastName" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="number">Phone number</label>
                    <input type="number" id="number" class="form-control">
                </div>

            </div>



            <div v-if="lodge" class="formBox my-5">
                <h5 class="p-3 title">Step 2 - Booking details</h5>
                <hr class="formHr" />

                <div v-if="lodge.accommodation_resources">
                  <ul>
                      <li style="color: black !important;"><p><strong>Unit also includes:</strong></p></li>
                      <li v-for="resource in lodge.accommodation_resources">{{resource.resource_name}}</li>
                  </ul>
                </div>



            </div>


            <div class="formBox my-5">
                <h5 v-if="expectedData" class="p-3 title">Warning: Some details have not been selected yet</h5>
                <hr class="formHr" />

                <div v-if="!expectedData.checkIn" class="form-group">
                    <label for="checkIn">Select a check-in date</label>
                    <input id="checkIn" type="date" >
                </div>

                <div v-if="!expectedData.checkOut" class="form-group">
                    <label for="checkOut">Select a check-out date</label>
                    <input id="checkOut"  type="date" >
                </div>

            </div>

        </form>


    </div>
</template>


<script>
    export default{
        props: {
            lodge: {

            },
            bookingData: {

            },
        },
        data(){
            return{
                expectedData: {
                    checkIn: '',
                    checkOut: '',
                    persons: '',
                    type : '',
                },

                // testData: {
                //     checkInDate: {
                //         type: Date,
                //         default: null,
                //         required: true
                //     },
                //     checkOutDate: {
                //         type: Date,
                //         default: null,
                //         required: true
                //     },
                //     persons: {
                //         type: Number,
                //         default: null,
                //         required: true,
                //     },
                //     lodgeType: {
                //         type: String,
                //         default: null,
                //         required: true,
                //     }
                // }
            }
        },
        mounted(){
            if(this.bookingData){
                this.expectedData = this.bookingData;
            }
        },

        computed: {


        },
        methods: {
            // valueMissing: function(){
            //     for(let i = 0; i < 4; i++){
            //         if(this.expectedData[i] === ''){
            //
            //         }
            //     }
            //     return null;
            // }
        }
    }
</script>


<style scoped>

    #confirmBookingForm{

    }

    .formHr{
        width: 100%;
        background-color: #707070;
        height: 0.1px;
        margin: 0;
    }

    .form-group{
        margin: auto;
        padding: 1rem;
    }

    label{
        font-weight: bold;
    }

    .title{
        font-weight: bold;
    }

    .formBox{
        border: 1px solid #707070;
    }

    ul{
        list-style-type: none;
        margin: 2rem;
        padding: 0;
        overflow: hidden;

        /*border: 0.5px solid gray;*/
        /*border-radius: 1rem;*/
    }

    li{
        float: left;
        display: block;
        color: green;
        text-align: center;
        padding: 10px;
    }



</style>
