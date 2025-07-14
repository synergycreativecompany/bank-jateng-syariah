<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Pinjaman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h3 class="mb-4">Verifikasi Pinjaman</h3>

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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pinjamans as $pinjaman)
                    <tr>
                        <td>{{ optional($pinjaman->user)->name ?? 'User tidak ditemukan' }}</td>
                        <td>{{ optional($pinjaman->user)->email ?? 'email tidak ditemukan' }}</td>
                        <td>Rp {{ number_format($pinjaman->amount, 0, ',', '.') }}</td>
                        <td>{{ $pinjaman->deposit_date }}</td>
                        <td>
                            @if($pinjaman->status === 'pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                            @elseif($pinjaman->status === 'approved')
                                <span class="badge bg-success">Disetujui</span>
                            @else
                                <span class="badge bg-danger">Ditolak</span>
                            @endif
                        </td>
                        <td>
                            @if($pinjaman->status === 'pending')
                                <form method="POST" action="{{ route('admin.pinjaman.approve', $pinjaman->id) }}" class="d-inline">
                                    @csrf
                                    <button class="btn btn-sm btn-success">Setujui</button>
                                </form>

                                <form method="POST" action="{{ route('admin.pinjaman.reject', $pinjaman->id) }}" class="d-inline ms-1">
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
