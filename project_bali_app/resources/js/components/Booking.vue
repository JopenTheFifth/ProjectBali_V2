<template>
    <div class="container-fluid">
        <div id="sidebar" class="card">
            <img  src="/images/main_hero_darkened.jpg" class="card-img-top">

            <h5 v-if="lodge" class="card-title my-4">{{lodge.name}}</h5>

            <p v-if="lodge">{{lodge.lodge_type.description}}</p>

            <div id="sidebarDetailBox">
                <div class="my-4">
                    <p v-if="bookingData && bookingData.checkIn">Check in: <strong>{{bookingData.checkIn}}</strong></p>
                    <p v-else>Check in: <strong>No check-in selected!</strong></p>

                    <p v-if="bookingData && bookingData.checkOut">Check out: <strong>{{bookingData.checkOut}}</strong></p>
                    <p v-else>Check in: <strong>No check-out selected! </strong></p>
                </div>
                <hr />

                <div class="my-4">
                    <p v-if="lodge && lodge.price_per_night">Average price per night: <strong> ${{lodge.price_per_night}}</strong></p>
                    <p>Duration: <strong>5 days</strong></p>

                </div>
                <hr />
                <div class="my-4">
                    <p>Total price: <strong> $5232.34</strong></p>
                </div>
            </div>

          <div class="py-5" v-if="expectedData">
              <div v-for="(item, key, index) in expectedData">
                  <p v-if="item === ''">{{key}} is not selected yet!</p>
              </div>
          </div>

        </div>
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
            }
        },
        mounted(){
            if(this.bookingData){
                this.expectedData = this.bookingData;
            }
        },

        computed: {
        }
    }
</script>


<style scoped>
    #sidebar{
        float: right;
        width: 420px;
        background-color: black;
    }
    #sidebarDetailBox{
        background-color: white;
        border: 1px solid gray;
        padding: 0.5rem;
    }

    .card{
        background-color: #E1C97C !important;
        padding: 0.7rem !important;
    }
    .card-img-top{
        width: 100%;
    }

    hr{
        height: 0.1px;
        width: 100%;
    }
</style>
