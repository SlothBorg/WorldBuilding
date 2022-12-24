@extends('layouts.history')

@section('title', 'History - ' . $history->name)

@section('content')
    @livewire('history.show', ['history' => $history])
@endsection