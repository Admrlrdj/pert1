<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow p-4">
            <h3 class="mb-3">Penjumlahan Dua Angka</h3>

            <form method="POST" action="{{ route('count') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="number" name="bil1" class="form-control" placeholder="Bilangan 1" required>
                    </div>
                    <div class="col">
                        <input type="number" name="bil2" class="form-control" placeholder="Bilangan 2" required>
                    </div>
                </div>
                <button class="btn btn-primary">Hitung</button>
            </form>

            @isset($hasil)
                <div class="alert alert-success mt-3">
                    <strong>Hasil: {{ $hasil }}</strong>
                </div>
            @endisset
        </div>

        <div class="card shadow mt-4 p-4">
            <h4>Riwayat Transaksi</h4>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Waktu</th>
                        <th>Bil 1</th>
                        <th>Bil 2</th>
                        <th>Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $t)
                        <tr>
                            <td>{{ $t->created_at }}</td>
                            <td>{{ $t->bil01 }}</td>
                            <td>{{ $t->bil02 }}</td>
                            <td>{{ $t->bil01 + $t->bil02 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
