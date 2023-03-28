@extends('layouts.main')

@section('content')
    @livewire('carousel.heroes')
    
    @livewire('section.facts')
    <hr>
    @livewire('section.about')
    <hr>
    @livewire('section.latest-blog')
@endsection