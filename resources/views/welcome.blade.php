<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Vezbanje</title>
</head>
<body>

    <div class="container">
        <h2>Sve ocene</h2>
        <a href="/dodaj-ocenu" class="btn btn-primary">Dodaj ocenu</a>
        <hr>

        <table class="table">
            <tr>
                <th>id</th>
                <th>predmet</th>
                <th>profesor</th>
                <th>ocena</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Action</th>
            </tr>

            @foreach ($ocene as $ocena)
            <tr>
                <td>{{ $ocena->id }}</td>
                <td>{{ $ocena->predmet }}</td>
                <td>{{ $ocena->profesor }}</td>
                <td>{{ $ocena->ocena }}</td>
                <td>{{ $ocena->created_at }}</td>
                <td>{{ $ocena->updated_at }}</td>
                <td>
                    <form method="post" action="/delete-user-grade/{{$ocena->id}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>