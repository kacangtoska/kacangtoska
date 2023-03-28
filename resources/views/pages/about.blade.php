@extends('layouts.main')

@section('content')
    @livewire('carousel.header-page', ['pageTitle' => $pageTitle])

    @livewire('section.about')

    @livewire('section.facts')

    @livewire('section.teams')
@endsection