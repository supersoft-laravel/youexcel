@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="container mt-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Users Table</h4>
                    @canany(['create user'])
                    <a href="{{ route('users.create') }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Add User
                    </a>
                    @endcan
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @elseif(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Role') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['delete user', 'update user'])
                                <th>{{ __('Action') }}</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ ucfirst($user->name) }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ Str::title(str_replace('-', ' ', $user->getRoleNames()->first())) }}</td>
                                <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <span
                                        class="badge me-4 badge-{{ $user->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($user->is_active) }}</span>
                                </td>
                                @canany(['delete user', 'update user'])
                                    <td>
                                        @canany(['delete user'])
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        @endcan
                                        
                                        @canany(['update user'])
                                            <a class="btn btn-sm btn-primary" href="{{ route('users.edit', $user->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        
                                            <a href="{{ route('users.status.update', $user->id) }}"
                                               class="btn btn-sm btn-warning">
                                                
                                                @if ($user->is_active == 'active')
                                                    <i class="fas fa-toggle-on text-success"></i>
                                                @else
                                                    <i class="fas fa-toggle-off text-danger"></i>
                                                @endif
                                        
                                            </a>
                                        @endcanany
                                    </td>
                                @endcan
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
@endsection
