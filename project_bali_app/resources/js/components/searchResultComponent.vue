<template>
    <div class="container my-5">

        <p><strong>{{searchResults.length}} lodges </strong> match your filters. <a href="" @click.prevent="clearAllFilters">Clear all filters</a></p>


        <div v-if="searchResults" class="d-inline container">
            <div  v-if="searchResults.type" class="filter-block d-sm-inline">{{searchResults.type}}</div>
            <div  v-if="searchResults.persons" class="filter-block d-sm-inline">{{searchResults.persons}} persons</div>
        </div>


        <div v-if="errors" class="alert alert-danger my-5">
            <ul>
                <li v-for="error in errors">{{error}}</li>
            </ul>
        </div>

        <div class="searchResultsContainer my-5">
            <div v-for="lodge in searchResults" :key="lodge.id" class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 image-col">
                            <img class="card-img" src="images/Hero_img4.jpg">
                        </div>
                        <div class="col-lg-4" style="text-align: center;">
                            <p class="title my-5 ">{{lodge.name}}</p>
                            <h3 class="my-5 ">{{lodge.price_per_night}}</h3>
                            <button @click="$router.push({name: 'Booking', params: {lodge: lodge}})" class="my-2 btn btn-primary" style="background-color:#E1C97C; color: black; border: none; width: 50%;">Book</button>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-description">
                                <p>Display rating</p>
                                <p v-if="lodge.lodge_type.description">{{lodge.lodge_type.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

    export default{
        props: {
           searchResults: {

           },
            errors: [],
        },
        data(){
            return{
            }
        },
    }
</script>

<style scoped>
    .searchResult-container{
        display: flex;
        width: 100%;
        flex-direction: column;
        flex: 1;
    }
    .card{
        margin: 1rem;
    }

    .card-img{
        width: 100%;
        height: 300px;
    }

    .image-col{
        padding: 0 !important;
    }

    .filter-block{
        background-color: white;
        border: 1px solid #707070;
        padding: 0.8rem;
        margin-left: 1rem;
        width: 9rem;
    }
    .filter-block:hover{
        border: 2px solid #E1C97C;
        cursor: pointer;
    }

    .col-lg-4{
        margin: auto;
    }

    .title{
        font-weight: bold;
        font-size: 1.2rem;
    }
</style>
