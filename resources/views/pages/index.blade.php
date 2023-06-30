@extends('layouts.app')

@section('content')
    <table class="table-users">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
@endsection
