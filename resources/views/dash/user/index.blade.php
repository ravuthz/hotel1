@extends('layouts.dash') @section('content')
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Username</th>
                <th class="text-right">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->username }}</td>
                <td>
                    <div class='pull-right hidden-phone text-center'>
                        <a href='{!! route("admin.users.show", $user->id) !!}' class='btn btn-info btn-xs'>
                            <i class='fa fa-check'></i>
                        </a>
                        <a href='{!! route("admin.users.edit", $user->id) !!}' class='btn btn-primary btn-xs'>
                            <i class='fa fa-pencil'></i>
                        </a>
                        <a href='javascript:;' class='btn btn-danger btn-xs btn-delete'>
                            <i class='fa fa-times'></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="">
        {{ $users->links() }}
    </div>
</div>
@endsection
