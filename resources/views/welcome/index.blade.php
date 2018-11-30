@extends('layouts.master')

@section('title', 'Welcome to Top Jobs')

@section('content')

    <!-- Section Home -->
    @include('welcome.components.section-home')

    <!-- Section How it works -->
    @include('welcome.components.section-how-it-works')

    <!-- Section Employer-->
    @include('welcome.components.Section-employer-company')

    <!-- Category Section-->
    @include('welcome.components.category-section')

    <!-- Section Job Categories -->
    @include('welcome.components.career-section')

    <!-- Section Hot Jobs -->
    @include('welcome.components.hot-jobs')

@stop

