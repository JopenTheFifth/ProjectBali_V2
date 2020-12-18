@extends('layouts.app')


@section('content')
<div class="flex border-b">
    <div class="container my-3">
        <router-link class="mr-4" to="/" exact>Home</router-link>
        <router-link to="/lodges">Lodges</router-link>
    </div>
</div>
<router-view></router-view>

@endsection
