<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Deposito</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h3 class="mb-4">Verifikasi Deposito</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($deposits as $deposit)
                    <tr>
                        <td>{{ $deposit->user->name }}</td>
                        <td>{{ $deposit->user->email }}</td>
                        <td>Rp {{ number_format($deposit->amount, 0, ',', '.') }}</td>
                        <td>{{ $deposit->deposit_date }}</td>
                        <td>
                            @if($deposit->status === 'pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                            @elseif($deposit->status === 'approved')
                                <span class="badge bg-success">Disetujui</span>
                            @else
                                <span class="badge bg-danger">Ditolak</span>
                            @endif
                        </td>
                        <td>
                            @if($deposit->status === 'pending')
                                <form method="POST" action="{{ route('admin.deposits.approve', $deposit->id) }}" class="d-inline">
                                    @csrf
                                    <button class="btn btn-sm btn-success">Setujui</button>
                                </form>

                                <form method="POST" action="{{ route('admin.deposits.reject', $deposit->id) }}" class="d-inline ms-1">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Tolak</button>
                                </form>
                            @else
                                <span class="text-muted">Sudah diproses</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada pengajuan deposito.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
