<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pegawai</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Register Pegawai</h2>
        <form action="/register" method="post">
            <div class="form-group">
                <label for="Nik">NIK</label>
                <input type="text" class="form-control" id="Nik" name="Nik" required>
            </div>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" required>
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <textarea class="form-control" id="Alamat" name="Alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="Jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="Jenis_kelamin" name="Jenis_kelamin" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="No_tlp">No. Telepon</label>
                <input type="text" class="form-control" id="No_tlp" name="No_tlp">
            </div>
            <div class="form-group">
                <label for="Jabatan">Jabatan</label>
                <select class="form-control" id="Jabatan" name="Jabatan_id" required>
                    <!-- Options should be populated dynamically from the database -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Pegawai</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                    <th>Jabatan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data should be populated dynamically from the database -->
                <tr>
                    <td>1</td>
                    <td>123456</td>
                    <td>John Doe</td>
                    <td>Jl. Example</td>
                    <td>L</td>
                    <td>08123456789</td>
                    <td>Manager</td>
                    <td>
                        <a href="/edit/1" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/delete/1" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/register" class="btn btn-primary">Add New Pegawai</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Login</h2>
        <form action="/login" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>