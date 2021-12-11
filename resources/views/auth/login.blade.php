@extends('layouts.clean')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth/auth.css') }}">
@endpush

@section('title', __('Login'))

@section('content')
    <div
        class="page auth login fill-height"
    >
        <div
            class="credentials-box"
        >
            <v-row>
                <v-col
                    class="col-12 d-flex justify-center"
                >
                    <img
                        src="{{ asset('img/logo.png') }}"
                        class="logo"
                    />
                </v-col>
            </v-row>
            <v-row>
                <v-col
                    class="col-12"
                >
                    <v-text-field
                        dense
                        rounded
                        outlined
                        label="{{ __('E-Mail Address') }}"
                        hide-details="auto"
                    />
                </v-col>
                <v-col
                    class="col-12"
                >
                    <v-text-field
                        dense
                        rounded
                        outlined
                        label="{{ __('Password') }}"
                        hide-details="auto"
                    />
                </v-col>
                <v-col
                    class="col-12 d-flex justify-center"
                >
                    <v-btn
                        rounded
                        block
                        color="success"
                        class="elevation-0"
                    >
                        {{ __('Login') }}
                    </v-btn>
                </v-col>
            </v-row>
        </div>
    </div>
@endsection
