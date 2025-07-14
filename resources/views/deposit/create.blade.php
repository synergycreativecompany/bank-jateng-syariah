<!DOCTYPE html>
<html>
<head>
    <title>Formulir Deposito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h3 class="mb-4">Formulir Pengajuan Deposito</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('deposit.store') }}">
        @csrf
        <div class="mb-3">
            <label for="amount" class="form-label">Jumlah Deposito (Rp)</label>
            <input type="number" name="amount" class="form-control" required min="10000">
        </div>

        <div class="mb-3">
            <label for="deposit_date" class="form-label">Tanggal Deposito</label>
            <input type="date" name="deposit_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajukan Deposito</button>
    </form>
</div>
</body>
</html>