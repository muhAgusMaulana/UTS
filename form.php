<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>UTS WEB 2</title>

    <style>
        .center_div {
            margin: 0 auto;
            width: 80%;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Form covid</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4 col-md-offset-4">
                <form action="index.php">
                    <div class="form-group">
                        <label for="cmbNamaWilayah">Nama Wilayah</label>
                        <select class="form-control" name="wilayah" id="cmbNamaWilayah">
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtJmlPositif">Jumlah Positif</label>
                        <input type="text" class="form-control" name="txtJmlPositif">
                    </div>
                    <div class="form-group">
                        <label for="txtJmlRawat">Jumlah Dirawat</label>
                        <input type="text" class="form-control" name="txtJmlRawat">
                    </div>
                    <div class="form-group">
                        <label for="txtJmlSembuh">Jumlah Sembuh</label>
                        <input type="text" class="form-control" name="txtJmlSembuh">
                    </div>
                    <div class="form-group">
                        <label for="txtJmlMeninggal">Jumlah Meninggal</label>
                        <input type="text" class="form-control" name="txtJmlMeninggal">
                    </div>
                    <div class="form-group">
                        <label for="txtOperatorName">Nama Operator</label>
                        <input type="text" class="form-control" name="txtOperatorName">
                    </div>
                    <div class="form-group">
                        <label for="txtNIM">NIM Mahasiswa</label>
                        <input type="text" class="form-control" name="txtNIM">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>