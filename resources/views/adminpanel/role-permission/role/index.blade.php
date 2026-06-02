@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Roles</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Roles</li>
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
                    <h4>Roles Table</h4>
                    @canany(['create role'])
                    <a href="{{ route('roles.create') }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Add Role
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
                            <th>{{ __('Role') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            @canany(['delete role', 'update role'])
                                <th>{{ __('Action') }}</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($allRoles as $index => $allRole)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ Str::title(str_replace('-', ' ', $allRole->name)) }}</td>
                            <td>{{ $allRole->created_at->format('Y-m-d') }}</td>
                            @canany(['delete role', 'update role'])
                                @if(!($allRole->name == "super-admin"))
                                    <td>
                                        @canany(['delete role'])
                                            <form action="{{ route('roles.destroy', $allRole->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are you sure you want to delete this role?')" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        @endcan
                                        
                                        @canany(['update role'])
                                            <a class="btn btn-sm btn-primary" href="{{ route('roles.edit', $allRole->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        @endcan
                                    </td>
                                @else
                                    <td>
                                        <p class="text-danger">cannot be changed!</p>
                                    </td>
                                @endif
                            @endcan
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No roles found.</td>
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
