<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f1f1f1;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background: #1f2937;
            padding-top: 20px;
        }

        .sidebar h3 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #374151;
        }

        .content {
            margin-left: 250px;
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .table-container {
            background: white;
            padding: 20px;
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Admin Panel</h3>

        <a href="#">Dashboard</a>
        <a href="#">Tambah User</a>
        <a href="#">Buka Presensi</a>
        <a href="#">Rekap Absensi</a>
        <a href="#">Logout</a>
    </div>

    <!-- Content -->
    <div class="content">

        <h2 class="mb-4">Rekap Absensi</h2>

        <!-- Filter -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">

                <form class="row g-3">

                    <div class="col-md-4">
                        <label class="form-label">Filter Role</label>
                        <select class="form-select">
                            <option value="">Semua</option>
                            <option value="guru">Guru</option>
                            <option value="siswa">Siswa</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-md-4 d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            Filter Rekap
                        </button>
                    </div>

                </form>

            </div>
        </div>

        <!-- Table Rekap -->
        <div class="table-container shadow-sm">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Data Rekap Absensi</h4>
            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Jam Masuk</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Budi</td>
                            <td>Guru</td>
                            <td><span class="badge bg-success">Hadir</span></td>
                            <td>07:00</td>
                            <td>26-05-2026</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Siti</td>
                            <td>Siswa</td>
                            <td><span class="badge bg-warning text-dark">Izin</span></td>
                            <td>-</td>
                            <td>26-05-2026</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Andi</td>
                            <td>Guru</td>
                            <td><span class="badge bg-success">Hadir</span></td>
                            <td>07:10</td>
                            <td>26-05-2026</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>
</html>