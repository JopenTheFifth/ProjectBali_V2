<template>
    <div class="container my-3">
        <p>{{}} lodges match your filters. <a>Clear all filters</a></p>



        <div v-if="errors.length" class="alert alert-danger">
            <ul>
                <li v-for="error in errors">{{error}}</li>
            </ul>
        </div>

        <div v-if="searchResults">
            <ul>
                <li v-for="item in searchResults">
                    {{item}}
                </li>
            </ul>
        </div>


        <div class="searchResultsContainer">
            <div v-for="lodge in lodges" class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 image-col">
                            <img  class="card-img" src="images/Hero_img4.jpg">
                        </div>
                        <div class="col-lg-4 my-5">
                            <p>{{lodge.name}}</p>
                            <h1>{{lodge.price_per_night}}</h1>
                            <button class="btn btn-primary" style="background-color:#E1C97C; color: black; border: none; width: 50%;">Book</button>
                        </div>
                        <div class="col-lg-4 my-5">
                            <div class="card-description">
                                <p>Display rating</p>
                                <p>{{lodge.type.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>



<script>
    //import serverbus which this component listens to
    import {serverBus} from "../app";

    export default{
        data(){
            return{
                searchResults: [],
                lodges: [],
                lodge: {
                    id: '',
                    name: '',
                    surface: '',
                    price_per_night: '',
                    lodge_type_id: '',
                    type: {
                        description: ''
                    },
                },
                errors: [],
            }
        },
        created(){
            //using the server bus.
            //We do this here because we want to listen to the event as soon as this component has been
            //created
            serverBus.$on('dateSelected', (server) => {
               this.searchResults = server;
               console.log(this.searchResults);
            });
            this.getAllLodges();
        },


        computed: {
            searchData(){
                return this.searchResults;
            }
        },

        watch: {
            searchData(){
                this.getSearchResults();
            }
        },


        methods: {
            getAllLodges(){
                axios.get('api/all-lodges').then((res) => {
                    this.lodges = res.data.data;
                });
            },

            getSearchResults(){

            }
        }

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
        width: 300px;
        height: 300px;
    }

    .image-col{
        padding: 0 !important;
    }
</style>
