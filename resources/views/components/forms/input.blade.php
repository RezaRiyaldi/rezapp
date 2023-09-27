<div class="form-group my-2">
  <label class="form-label">{{ $label }}</label>
  <input type="{{ $type ?? 'text' }}" name="{{ $name }}" class="form-control" value="{{ $value ?? '' }}" id="{{ $idCustom ?? '' }}" {{ $required ?? '' }}>
  <div></div>
</div>