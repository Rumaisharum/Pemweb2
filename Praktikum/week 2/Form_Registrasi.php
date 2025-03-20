<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container px-5 my-5">
    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label" for="nim">NIM</label>
            <input class="form-control" id="nim" type="text" placeholder="NIM" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="namaLengkap">Nama Lengkap</label>
            <input class="form-control" id="namaLengkap" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jenis Kelamin</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="lakiLaki" type="radio" name="jenisKelamin" data-sb-validations="" />
                <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="perempuan" type="radio" name="jenisKelamin" data-sb-validations="" />
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>
        
    <?php 
        $ar_prodi = ["TI" => "Teknik Informatika",
        "SI" => "Sistem Informasi", "BD" => "Bisnis Digital"];
    ?>
        
        <div class="mb-3">
            <label class="form-label" for="programStudi">Program Studi</label>
            <select class="form-select" id="programStudi" aria-label="Program Studi">
                <option value="">Pilih Program Studi</option>
                <?php foreach($ar_prodi as $k => $v) 
                echo "<option value ='$k'>$v</option>";
                ?>
        <div class="mb-3">
            <label class="form-label" for="domisili">Domisili</label>
            <input class="form-control" id="domisili" type="text" placeholder="Domisili" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="domisili:required">Domisili is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" placeholder="Email" data-sb-validations="required,email" />
            <div class="invalid-feedback" data-sb-feedback="email:required">Email is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email Email is not valid.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>