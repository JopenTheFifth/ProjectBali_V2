<template>
    <div>
        <div class="datepicker-container container">
            <date-picker-component></date-picker-component>
        </div>

        <div class="searchResult-container">
            <search-result-component :search-results="lodges"></search-result-component>
        </div>

    </div>

</template>


RESTRUCTURE

PROPS only work if you want to pass data from the PARENT TO THE CHILD.


Whenever a change is made in the datePickerComponent. Send the new data to this root component.
Since this component is the parent of the datePickerComponent, it cannot receive data from the date-pickerComponent via props.
This means i must use the serverBus to receive the data.


This component will then make an API request and store the corresponding search Data.
Once we receive the data from the event, we can pass the new data to the searchResultComponent via PROPS.


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
