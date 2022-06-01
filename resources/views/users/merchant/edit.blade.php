@extends('layouts.app')

@section('header')
    <h1 class="m-0">Create Merchant</h1>
@endsection

@section('content')
    <div class="card-body">
        <form method="POST" action="{{ route('merchant.update', $merchant->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
            <div class="col md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $merchant->name }}" required-autocomplete="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{  $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Adress') }}</label>
            <div class="col md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $merchant->email }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{(__('Passeord'))}</label>
