<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Export Excel & CSV in Laravel 9</title>
    {{-- we will use Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Laravel 9 Import and Export CSV & Excel to Database
        </h2>
        {{-- create a form tag with method post for the import feature --}}
        <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="input-group">
                    {{-- make sure to add file to name attribute --}}
                    <input type="file" name="file" class="form-control">
                </div>
                <div><small>Upload the file here before clicking 'Import data'</small></div>
            </div>
            <button class="btn btn-primary">Import data</button>
            {{-- create a button for export feature --}}
            <a class="btn btn-success" href="{{ route('users.export') }}">Export data</a>
        </form>
        {{-- display users data --}}
        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>