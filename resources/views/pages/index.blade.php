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
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pag-links">
        @if ($currentPage > 1)
            <a href="/?page={{ $currentPage - 1 }}">&#171;</a>
        @endif

        @for ($page = 1; $page <= $totalPages; $page++)
            <a href="/?page={{ $page }}">{{ $page }}</a>
        @endfor

        @if ($currentPage < $totalPages)
            <a href="/?page={{ $currentPage + 1 }}">&#187;</a>
        @endif
    </div>
@endsection