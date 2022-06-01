@extends('layouts.app')

@section('header')
    <h1 class="m-0">List Merchant</h1>
@endsection

@section('content')
    <div class="card-body">
        <a class="btn btn-primary" href="{{ route('merchant.create') }}">Create</a>
        <hr>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($merchant as $data )
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <a class="btn btn-small btn-success" href="{{ route('user.merchant.edit',) }}">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
