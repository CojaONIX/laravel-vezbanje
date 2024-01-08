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
        <h2>Dodaj ocenu</h2>
        <a href="/" class="btn btn-primary">Cancel</a>
        <hr>

        <div class="col-6">
            <form method="POST" action="/add-user-grade">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="predmet" name="predmet" placeholder="Predmet:" autofocus value="{{ old('predmet') }}">
                    <label for="predmet">Predmet:</label>
                    @error('predmet')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="profesor" name="profesor" placeholder="Profesor:" value="{{ old('profesor') }}">
                    <label for="profesor">Profesor:</label>
                    @error('profesor')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form col-4">
                    <label for="ocena">Ocena:</label>
                    <input type="number" class="form-control" id="ocena" name="ocena" value="{{ old('ocena') }}">
                    @error('ocena')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <button class="btn btn-outline-primary col-12 my-3" type="submit">Save</button>
            </form>
        </div>
    </div>
</body>
</html>