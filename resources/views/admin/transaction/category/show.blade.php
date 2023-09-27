@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <button class="btn btn-warning btn-sm mb-3" onclick="CORE.showModal('modalEditRole')">Edit</button>
            <table class="table">
                <tr>
                    <th>Category</th>
                    <td>: {{ $category->category }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>: {{ $category->description ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Created by</th>
                    <td>: {{ $category->user->name }}</td>
                </tr>
            </table>
        </div>
    </div>



    {{-- <div class="card">
      <div class="card-body">
          <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="pill" href="#home">User</a>
              </li>
              @if (check_authorized('004RT'))
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#menu1">Module</a>
                  </li>
              @endif
          </ul>
            <div class="tab-content mt-3">
                <div class="tab-pane container active" id="home">
                    <button class="btn btn-success btn-sm mb-3" onclick="CORE.showModal('modalAssignUser')">Assign user ke
                        role ini</button>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center">Tidak ada user</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if (check_authorized('004RT'))
                    <div class="tab-pane container fade" id="menu1">

                        @livewire('apps.admin.role.module-assign', ['role' => $role])

                    </div>
                @endif
            </div>
        </div>
    </div> --}}

    {{-- <div class="modal fade" id="modalEditRole">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Role</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <form action="{{ route('app.roles.update', $role->id) }}" method="POST" with-submit-crud>
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class='form-label'>Role</label>
                            <input type="text" class="form-control" name="role_name" value="{{ $role->role_name }}">
                        </div>

                        <button class="btn btn-success btn-sm mt-2">Update</button>
                    </form>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div> --}}
@endsection
