@extends('layouts.clean')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth/auth.css') }}">
@endpush

@section('title', __('Register'))

@section('content')
    <div
        class="page auth register fill-height"
    >
        <v-row
            class="fill-height ma-0"
        >
            <v-col
                class="col-4 splash"
            >
                <img
                    src="{{ asset('img/logo.png') }}"
                    class="logo"
                />
                <div>
                    <h1>The APP</h1>
                    <p>
                        Morrer eh isso
                    </p>
                </div>
            </v-col>
            <v-col
                class="col-8 form"
            >
                asd
            </v-col>
        </v-row>
    </div>
@endsection
