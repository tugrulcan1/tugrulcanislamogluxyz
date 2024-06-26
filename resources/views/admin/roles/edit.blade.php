@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="card shadow-none border border-300  p-0" data-component-card="data-component-card">
                <div class="card-header border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 mb-0" data-anchor="data-anchor" id="soft-buttons">Rol Güncelle</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="name">Rol</label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Rol"
                                    value="{{ $role->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">İzinler</label>
                                <div class="row">
                                    @foreach ($permissions as $permission)
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="permission-{{ $permission->id }}" name="permissions[]"
                                                    value="{{ $permission->id }}"
                                                    @if ($role->rolePermissions->contains('permission_id', $permission->id)) checked @endif>
                                                <label class="form-check-label"
                                                    for="permission-{{ $permission->id }}">{{ $permission->key }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @if (in_array('UpdateRole', $userPermissions))
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                            @else
                                <p>Bu işlem için yetkiniz yok</p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
