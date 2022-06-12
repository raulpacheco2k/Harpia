@if ($errors->has($field))
    <div class="mt-3 alert alert-danger">
        <p>{{ $errors->first($field) }}</p>
    </div>
@endif
