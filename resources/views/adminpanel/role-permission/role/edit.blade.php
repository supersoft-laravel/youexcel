@extends('adminpanel.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Role</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Role Details</h3>
                </div>

                <form action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <!-- Title -->
                        <div class="form-group">
                            <label for="role_name">Role Name <span class="text-danger">*</span></label>
                            <input type="text" name="role_name" id="role_name" class="form-control @error('role_name') is-invalid @enderror"
                                placeholder="Enter role name" value="{{ old('role_name', $role->name) }}" required>
                            @error('role_name') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <hr>
                        
                        <div class="col-12">
                            <h5 class="mb-3 font-weight-bold">Permissions</h5>
                        
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                        
                                        {{-- Select All Row --}}
                                        <tr>
                                            <td class="font-weight-bold">
                                                Administrator Access
                                                <small class="text-muted d-block">
                                                    Allows full access to the system
                                                </small>
                                            </td>
                                            <td class="text-right align-middle">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="selectAll">
                                                    <label class="form-check-label" for="selectAll">
                                                        Select All
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                        
                                        {{-- Permissions --}}
                                        @if(isset($permissions) && count($permissions) > 0)
                                            @php
                                                $groupedPermissions = $permissions->groupBy(function ($item) {
                                                    $parts = explode(' ', $item->name);
                                                    return implode(' ', array_slice($parts, 1));
                                                });
                                            @endphp
                        
                                            @foreach ($groupedPermissions as $entity => $entityPermissions)
                                                <tr>
                                                    <td class="font-weight-bold text-capitalize">
                                                        {{ $entity }}
                                                    </td>
                        
                                                    <td class="text-right">
                                                        <div class="d-flex flex-wrap justify-content-end">
                        
                                                            @foreach (['view', 'create', 'update', 'delete'] as $action)
                                                                @php
                                                                    $permission = $entityPermissions->firstWhere(
                                                                        'name',
                                                                        "{$action} {$entity}"
                                                                    );
                                                                @endphp
                        
                                                                @if ($permission)
                                                                    <div class="form-check mr-3">
                                                                        <input
                                                                            class="form-check-input"
                                                                            type="checkbox"
                                                                            id="perm-{{ $permission->id }}"
                                                                            name="permission[]"
                                                                            value="{{ $permission->name }}"
                                                                            {{ in_array($permission->name, $rolePermissions) ? 'checked' : '' }}
                                                                        >
                                                                        <label class="form-check-label" for="perm-{{ $permission->id }}">
                                                                            {{ ucfirst($action) }}
                                                                        </label>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                        
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const selectAll = document.getElementById('selectAll');
    const checkboxes = document.querySelectorAll('input[name="permission[]"]');

    // 🔥 Auto check Select All on page load
    function updateSelectAllState() {
        let allChecked = true;

        checkboxes.forEach((cb) => {
            if (!cb.checked) {
                allChecked = false;
            }
        });

        selectAll.checked = allChecked;
    }

    updateSelectAllState();

    // Select All toggle
    selectAll.addEventListener('change', function () {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAll.checked;
        });
    });

    // Individual checkbox change
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', function () {
            updateSelectAllState();
        });
    });

});
</script>
@endsection
