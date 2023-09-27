<x-forms.input-grid col1="2" col2="6" label="Nama" name="name" value="{{ $user->name ?? '' }}" placeholder="Masukan nama user..."></x-forms.input-grid>

<div class="row align-items-center my-2">
  <div class="col-md-2">
    <label class='form-label'>Jabatan</label>
  </div>
  <div class="col-md-6">
    <select name="role_id" class="form-control">
      @foreach ($roles as $role)
        <option {{ isset($user->role_id) && $user->role_id == $role->id ?"selected" : "" }} value="{{ $role->id }}">{{ $role->role_name }}</option>
      @endforeach
    </select>
    <div></div>
  </div>
</div>

<x-forms.input-grid col1="2" col2="6" label="Email" name="email" type="email" value="{{ $user->email ?? '' }}" placeholder="Masukan email user..."></x-forms.input-grid>
<x-forms.input-grid col1="2" col2="6" label="Username" name="username" value="{{ $user->username ?? '' }}" placeholder="Masukan username user..."></x-forms.input-grid>
<x-forms.input-grid col1="2" col2="6" label="Password" name="password" type="password" placeholder="Masukan password user..."></x-forms.input-grid>
