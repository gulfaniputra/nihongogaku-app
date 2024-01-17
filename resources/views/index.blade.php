@extends('layout.template')

@section('content')

{{-- Start data --}}
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
        <a href="{{ url('/create') }}" class="btn btn-primary">Add A Student</a>
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

            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->favorite }}</td>
                <td>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Del</a>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach

        </tbody>
    </table>
    {{ $data->links() }}
</div>
{{-- End data --}}

@endsection
