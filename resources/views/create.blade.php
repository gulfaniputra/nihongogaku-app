@extends('layout.template')

@section('content')

{{-- Start Form --}}
<form action="{{ url('/') }}" method="post">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="id" value="{{ Session::get('id') }}" id="id" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="{{ Session::get('name') }}" id="name" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="favorite" class="col-sm-2 col-form-label">Favorite Concept</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="favorite" value="{{ Session::get('favorite') }}"
                    id="favorite" />
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
