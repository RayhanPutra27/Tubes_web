<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Device Store</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Device Store</a>
            </div>
            <div class="card-body">
                <a href="/device/add" class="btn btn-primary">Add New Device</a>

                <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                <br />
                <br />
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($device as $dev)
                            <tr>
                                <td>{{ $dev->name }}</td>
                                <td>{{ $dev->type }}</td>
                                <td>{{ $dev->quantity }}</td>
                                <td>{{ $dev->price }}</td>
                                <td>
                                    <a href="/device/edit/{{ $dev->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/device/delete/{{ $dev->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
