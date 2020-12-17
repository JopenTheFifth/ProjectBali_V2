@extends('layouts.app')


@section('content')
<div class="flex border-b">
    <div class="container mx-auto">
        <router-link class="mr-4" to="/" exact>Home</router-link>
        <router-link to="/example">Example</router-link>
    </div>
</div>
<router-view></router-view>

@endsection
