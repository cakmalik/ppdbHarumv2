@extends('template.app.layout')
@section('title', 'Setups')
@section('header', 'Setups')
@section('content')
    <table class="table">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Value</th>
            <th>Info</th>
            <th>Act</th>
        </thead>
        <tbody>
            @foreach ($setups as $key => $setup)
                <tr>
                    <td>{{ $setups->firstItem() + $key }}</td>
                    <td>{{ $setup->name }}</td>
                    <td>{{ $setup->value }}</td>
                    <td>{{ $setup->info }}</td>
                    <td><a href="{{ route('edit.setup', $setup->id) }}" class="btn btn-sm btn-primary"><i
                                class="bi bi-pencil-square"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $setups->links('vendor.pagination.custom') }}
@endsection
