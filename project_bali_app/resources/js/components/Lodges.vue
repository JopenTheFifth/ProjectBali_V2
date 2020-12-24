<template>
    <div>
        <div class="datepicker-container container">
            <date-picker-component></date-picker-component>
        </div>

<!--        :lodge-type="searchData.type"-->
        <div class="searchResult-container">
            <search-result-component></search-result-component>
        </div>

    </div>

</template>



//I want the datePickerComponent (parent) to talk to the searchResult component(child)
//The problem is: In the parent we need to passt he data to our child using v-bind. This component is the parent, and not datePickerComponent)





//this is the child component that expects data to be passed rom the parent component(dataPickerComponent)
this component needs to declare the props it expects to be passed.


In the parent component we need to pass the data to our child using v-bind. The attribute value must be the same name
to the one defined on the child components props.






RESTRUCTURE

Whenever a change is made in the datePickerComponent. Send the new data to this root component.
This component will then make an API request and store the corresponding search Data.
The results of the API request will then be send to the searchResultComponent via PROPS.


<script>
    import datepickerComponent from "./datepickerComponent";
    import searchResultComponent from "./searchResultComponent";


    export default{

        data(){
            return{

            }
        },
        mounted() {

        },

        components: {
            datePickerComponent: datepickerComponent,
            searchResultComponent: searchResultComponent,
        }
    }
</script>

<style scoped>

</style>
