@extends('layouts.layout')

@section('name')
    Comics
@endsection

@php
    $cards = config('comics');
    // dd($cards)
@endphp



@section('main')
    <main class="comics">
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($cards as $card)
                    <div class="my-card">
                        <img src="{{ $card['thumb'] }}" alt="">
                        <p class="mt-2">{{ $card['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
