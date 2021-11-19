<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="p-5 mb-4 bg-dark text-white">
        <div class="container">
        <h1 class="text-center">Tambah Produk</h1>
        <form method ="POST" action="proses_tambah_produk.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_buku" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" placeholder="Masukkan Nama Produk" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4" placeholder="Masukkan Deskripsi Produk" required></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga Produk" required>
            </div>
            <div class="mb-3">
                <label for="foto_produk" class="form-label">Foto Produk</label>
                <input type="file" class="form-control" name="foto_produk" required>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>