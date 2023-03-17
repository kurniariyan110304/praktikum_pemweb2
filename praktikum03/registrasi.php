<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-md-12">
        <table>
        <fieldset>
            <legend><b>Form Registrasi IT Club Science</b></legend>
        <form action="proses_registrasi.php" method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" placeholder="Masukkan NIM" type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user "></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenkel" id="jenkel" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenkel" id="jenkel" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="studi" name="studi" class="custom-select">
        <option value="Sistem Informas">SI</option>
        <option value="Teknik Informatika">TI</option>
        <option value="Bisnis Digital">BD</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web & Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill" type="checkbox" class="custom-control-input" value="10"> 
        <label for="skill" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill" type="checkbox" class="custom-control-input" value="10"> 
        <label for="skill" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill" type="checkbox" class="custom-control-input" value="20"> 
        <label for="skill" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill" type="checkbox" class="custom-control-input" value="20"> 
        <label for="skill" class="custom-control-label">RWD Boostrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill" type="checkbox" class="custom-control-input" value="30"> 
        <label for="skill" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-conskilltrol custom-checkbox custom-control-inline">
        <input name="skill" id="skill" type="checkbox" class="custom-control-input" value="30"> 
        <label for="Phyton" class="custom-control-label">Phyton</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill" type="checkbox" class="custom-control-input" value="50"> 
        <label for="skill" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="Jakarta">Jakarta</option>
        <option value="Bogor">Bogor</option>
        <option value="Depok">Depok</option>
        <option value="Tangerang">Tangerang</option>
        <option value="Bekasi">Bekasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user "></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Masukkan Email" type="email" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </table>
    </fieldset>
    </form>
		</div>
	</div>
</div>
</body>
</html>