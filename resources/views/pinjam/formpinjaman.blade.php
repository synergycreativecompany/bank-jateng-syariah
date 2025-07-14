<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pinjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h3 class="mb-4">Formulir Pengajuan Pinjaman</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('pinjaman.store') }}">
        @csrf
        <div class="mb-3">
            <label for="amount" class="form-label">Jumlah Pinjaman (Rp)</label>
            <input type="number" name="amount" class="form-control" required min="10000">
        </div>

        <div class="mb-3">
            <label for="pinjaman_date" class="form-label">Tanggal Pinjaman</label>
            <input type="date" name="pinjaman_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajukan Pinjaman</button>
    </form>
</div>
</body>
</html>