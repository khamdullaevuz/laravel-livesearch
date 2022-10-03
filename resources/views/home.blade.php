<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-light">
<div class="container">
    <input class="form-control bg-white mt-3" type="text" id="search" placeholder="Search...">

    <div class="card mt-3 mb-3">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created at</th>
                </tr>
                </thead>
                <tbody id="persons-data">
                @forelse($persons as $person)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{$person->name}}</td>
                        <td>{{$person->created_at}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No data</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
{{-- require jquery asset --}}
@vite(['resources/js/app.js', 'resources/js/search.js'])
</body>
</html>
