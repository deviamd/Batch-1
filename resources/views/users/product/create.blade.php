@extends('layouts.app')

@section('header')
    <div class="d-flex justify-content-between">
        <h1 class="m-0">Create Product</h1>
        <a href="{{ route('user.product.index') }}" class="btn btn-primary">
            Back
        </a>
    </div>
@endsection

@section('content')
    <div class="card-body">

        <form method="POST" action="{{ route('user.product.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                <div class="col md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>
                <div class="col-md-6">
                    <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete>
                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
