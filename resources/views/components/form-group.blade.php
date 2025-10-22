@props(['name', 'label'])
<div class="form-group">
    <label class="form-label">{{ $label }}</label>
    <input name="{{ $name }}" value="{{ old($name) }}" type="text"
        class="@error($name) is-invalid @enderror form-control">
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
