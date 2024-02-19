<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .container{
        width: 100%;
        display: grid;
        place-items: center;
        margin-top: 20px;
    }

    .navbar{
        width: 100%;
        height: 10%;
        display: flex;
        justify-content: center;
        
    }
</style>
<body>
    
    <div class="navbar d-flex justify-content-around">
        <h1>Gallery</h1>
        <div class="">
            <a href="logout.php" class="btn btn-warning">Logout</a>
        </div>
    </div>

    <div class="container">
        <a href="tambah.php" class="btn btn-primary my-3">tambah data</a>
        <table class="table table-bordered" width="90%">
        <tr>
            <td>nama album</td>
            <td>deskripsi</td>
            <td>tanggal dibuat</td>
            <td>user id</td>
                <td>aksi</td>
            </tr>
            <tr>
                <td>sekolah</td>
                <td>ini adalah sekolah</td>
                <td>14-01-2023</td>
                <td>1</td>
                <td><a href="hapus.php" class="btn btn-primary">Hapus</a></td>
            </tr>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>