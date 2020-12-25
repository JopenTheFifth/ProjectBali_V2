<template>
    <div>
        <div class="datepicker-container container">
            <date-picker-component></date-picker-component>
        </div>

        <div class="searchResult-container">
            <search-result-component :search-results="lodges" :search-params="searchResults"></search-result-component>
        </div>

    </div>

</template>

<script>
    import datepickerComponent from "./datepickerComponent";
    import searchResultComponent from "./searchResultComponent";
    import {serverBus} from "../app";

    export default{
        data(){
            return{
                searchResults: {

                },
                //contains all the lodges based on the searchResult.
                lodges: [],
            }
        },
        created(){
            //listen to dateSelected event.
            serverBus.$on('dateSelected', (server) => {
                this.searchResults = server;
                this.getSearchResults();
            });

            serverBus.$on('errorOccurred', (server) => {
                this.errors = server;
            });

            this.getAllLodges();
        },

        methods: {
            getAllLodges(){
                axios.get('api/all-lodges').then((res) => {
                    this.searchResults = res.data.data;
                    this.lodges = res.data.data;
                });
            },
            getSearchResults(){
                axios.get('api/lodges/' + this.searchResults.type + '/' + this.searchResults.persons).then((res) => {
                    this.lodges = res.data;
                });
            },

        },

        components: {
            datePickerComponent: datepickerComponent,
            searchResultComponent: searchResultComponent,
        }
    }
</script>

<style scoped>

</style>
