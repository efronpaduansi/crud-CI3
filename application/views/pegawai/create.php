<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Tambah Data Pegawai</title>
</head>
<body>
    <div class="container d-flex justify-content-center mt-5">
       <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Input Data Pegawai
                </div>
                <div class="card-body">
                    <form action="<?=base_url().'index.php/crud/store' ?>" method="POST" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Field ini wajib di isi.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat <span class="text-danger">*</span></label>
                            <input type="text" id="alamat" name="alamat" class="form-control" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Field ini wajib di isi.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan <span class="text-danger">*</span></label>
                            <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Field ini wajib di isi.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-success">Simpan</button>
                        <a href="<?=base_url().'crud' ?>" class="d-flex justify-content-center mt-2">Batal</a>
                    </form>
                </div>
            </div>
       </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>