@extends('layouts.master')

@section('title', 'Welcome to Top Jobs')

@section('content')


    <!-- Section Home -->
    @include('welcome.components.section-home')

    <!-- Section How it works -->
    @include('welcome.components.section-how-it-works')


    <!-- Section Job Categories -->
    <div class="section-home">
        <h1>Job Categories</h1>
    </div>

    <!-- Section Hot Jobs -->
    <div class="section-home">
        <h1>Hot Jobs</h1>
    </div>

@stop
