@extends('layout.template')

@section('content')
{{-- Start Data --}}
<div class="my-3 p-3 bg-body rounded shadow-sm">

    {{-- Search form --}}
    <div class="pb-3">
        <form class="d-flex" action="" method="get">
            <input class="form-control me-1" type="search" name="keywords" value="{{ Request::get('keywords') }}"
                placeholder="Enter the keywords" aria-label="Search" />
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>
    </div>

    {{-- 'Add A Student' button --}}
    <div class="pb-3">
        <a href="" class="btn btn-primary">Add A Student</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">ID</th>
                <th class="col-md-4">Name</th>
                <th class="col-md-2">Favorite Concept</th>
                <th class="col-md-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>29163</td>
                <td>James</td>
                <td>Bidakuon</td>
                <td>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Del</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- End data --}}
@endsection
