<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto card shadow p-4">
                <form action="{{ route('getbookin') }}" method="get">
                    <div class="form-group">
                        <label>session</label>
                        <input type="text" name="session" class="form-control" placeholder="session" />
                    </div>
                    <div class="form-group">
                        <label>key</label>
                        <input type="text" name="key" class="form-control" placeholder="key" />
                    </div>
                    <div class="form-group">
                        <label>reference</label>
                        <input type="text" name="reference" class="form-control" placeholder="reference" />
                    </div>
                    <div class="form-group">
                        <label>provider</label>
                        <input type="text" name="provider" class="form-control" placeholder="provider" />
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
