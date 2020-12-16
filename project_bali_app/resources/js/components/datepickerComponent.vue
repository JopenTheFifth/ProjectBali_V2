<template>


<!--    <div style="float:left;">-->
<!--        <label for="lodgeType">Lodge type:</label>-->
<!--        <select id="lodgeType">-->
<!--            <option class="form-control" v-for="type in lodgeTypes" value="type.name">{{type.name}}</option>-->
<!--        </select>-->
<!--    </div>-->

<!--    <div style="float:left;">-->
<!--        <label for="check-in">Check-in:</label>-->
<!--        <input id="check-in" type="date" placeholder="Check in date">-->
<!--    </div>-->

<!--    <div style="float:left;">-->
<!--        <label for="check-out">Check-out:</label>-->
<!--        <input id="check-out" type="date" placeholder="Check in date">-->
<!--    </div>-->

<!--    <div style="float:left;">-->
<!--        <label for="persons">Persons:</label>-->
<!--        <input id="persons" type="text" placeholder="Persons">-->
<!--    </div>-->
<div class="card">
    <div class="card-title">
        <i>Check availability</i>
    </div>
    <hr />
    <div class="card-body">
        <form>

            <div >
                <label for="lodgeType" class="float-left">Lodge type:</label>
                <select class="form-control" id="lodgeType">
                    <option class="form-control" v-for="type in lodgeTypes" value="type.name">{{type.name}}</option>
                </select>
            </div>

            <div class="form-entry" >
                <label for="check-in" class="float-left">Check-in date:</label>
                <input class="form-control" id="check-in" type="date">
            </div>

            <div class="form-entry" >
                <label for="check-out" class="float-left">Check-out date:</label>
                <input class="form-control" id="check-out" type="date">
            </div>

            <div class="form-entry">
                <label for="persons" class="float-left">Persons:</label>
                <input class="form-control" id="persons" type="text">
            </div>

            <div class="form-entry">
                <input type="submit" class="btn btn-primary w-25" style="height: 2rem; background-color: #E1C97C !important; border:none; color: #6D6875;" value="Search">
            </div>

        </form>
    </div>
</div>




</template>

<script>
    export default{
        data(){
            return{
                lodgeTypes : [],
                lodges: [],
                lodge: {
                    id: '',
                    name: '',
                    surface: '',
                    price_per_night: '',
                    lodge_type_id: ''
                },
            }
        },
        //hooks
        created() {
            this.getLodgeTypes();
        },

        //methods
        methods:{
            search(){

            },
            getLodgeTypes(){
                axios.get('api/lodgeTypes').then((res) => {
                    this.lodgeTypes = res.data.data;
                    console.log(res.data);
                })
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
        font-size: 0.7rem;

    }

    .card{
        /*background-color: #FFCDB2;*/
        background-color: rgba(255, 255, 255, 0.3);
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
