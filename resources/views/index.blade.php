<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Linguistics Students</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous" />
    </head>

    <body class="bg-light">
        <main class="container">

            {{-- Start Form --}}
            <form action="" method="post">
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="id" id="id" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="favorite" class="col-sm-2 col-form-label">Favorite Concept</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="favorite" id="favorite" />
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

            {{-- Start Data --}}
            <div class="my-3 p-3 bg-body rounded shadow-sm">

                {{-- Search form --}}
                <div class="pb-3">
                    <form class="d-flex" action="" method="get">
                        <input class="form-control me-1" type="search" name="keywords"
                            value="{{ Request::get('keywords') }}" placeholder="Enter the keywords"
                            aria-label="Search" />
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
                            <td>001</td>
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

        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>
