@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('app.settings.update') }}" method="POST" with-submit-crud>
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class='form-label'>Project Name</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="project_name" placeholder="Input the project name" value="{{ $setting->project_name ?? ''}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class='form-label'>Multi Login</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="multi_login_device"
                                {{ $setting->multi_login_device == 1 ? 'checked' : '' }}>
                            <label class="form-check-label">Izinkan</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class='form-label'>From date</label>
                    </div>
                    <div class="col-md-8">
                      <input type="number" class="form-control" name="from_date" id="" min="1800" max="{{ date('Y') }}" step="1" placeholder="1800 s/d {{ date('Y') }}" value="{{ $setting->from_date ?? '' }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class='form-label'>To date</label>
                    </div>
                    <div class="col-md-8">
                      <input type="number" class="form-control" name="to_date" id="" min="1800" max="{{ date('Y', strtotime('5 years')) }}" step="1" placeholder="Last date your project" value="{{ $setting->to_date ?? ''}}">
                    </div>
                </div>

                <button class="btn btn-success btn-sm">Update Settings</button>

            </form>

        </div>
    </div>
@endsection
