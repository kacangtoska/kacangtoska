@extends('layouts.main')

@section('content')
    @livewire('carousel.heroes')
    @livewire('section.facts')
    @livewire('section.about')
    @livewire('section.latest-blog')
@endsection