@extends('layout.template')

@section('content')

{{-- Start Form --}}
<form action="{{ url('students/'.$data->digits) }}" method="post">
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('students') }}" class="btn-btn-secondary">Back</a>
        <div class="mb-3 row">
            <label for="digits" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                {{ $data->digits }}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="{{ $data->name }}" id="name" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="favorite" class="col-sm-2 col-form-label">Favorite Concept</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="favorite" value="{{ $data->favorite }}" id="favorite" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="favorite" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">
                    Save
                </button>
            </div>
        </div>
    </div>
</form>
{{-- End Form --}}

@endsection
