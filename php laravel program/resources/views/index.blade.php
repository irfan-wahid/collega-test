<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <a href="/tambah">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">No Cif</th>
                <th scope="col">Ace Officers</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            @php
                $counter = 1;
            @endphp
            @foreach($data as $d)
            <tbody>
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{$d->fullnm}}</td>
                    <td>{{$d->cifid}}</td>
                    <td>{{$d->aoid}}</td>
                    <td>
                        @if($d->sex == 1)
                            Laki-Laki
                        @elseif($d->sex == 0)
                            Perempuan
                        @endif
                    </td>
                    <td>
                        <a href="/edit/{{$d->cifid}}">Edit</a>
                        <a href="/delete/{{$d->cifid}}">Delete</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>