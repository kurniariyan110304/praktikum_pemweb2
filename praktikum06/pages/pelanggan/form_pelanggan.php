<?php
require_once '../../database/dbkoneksi.php';
if (isset($_GET['idedit'])) {
  $sql = "SELECT * FROM pelanggan WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_GET['idedit']]);
  $row = $st->fetch();
}
?>

<form method="POST" action="proses_pelanggan.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div>
        <input id="kode" name="kode" type="text" class="form-control" value="<?php if (isset($_GET['idedit'])) {
                                                                                echo $row['kode'];
                                                                              } ?>">
        <?php
        if (isset($_GET['idedit'])) {
          echo "<input name='idedit' type='hidden' value='" . $_GET['idedit'] . "'>";
        }
        ?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="nama" name="nama" type="text" class="form-control" value="<?php if (isset($_GET['idedit'])) {
                                                                                echo $row['nama'];
                                                                              } ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Jenis Kelamin</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div>
        <input id="jk" name="jk" value="L" type="radio" class="form-control" <?php if (isset($_GET['idedit'])) {
                                                                                if ($row['jk'] == "L") {
                                                                                  echo "checked";
                                                                                }
                                                                              } ?>>Laki-laki
        <input id="jk" name="jk" value="P" type="radio" class="form-control" <?php if (isset($_GET['idedit'])) {
                                                                                if ($row['jk'] == "P") {
                                                                                  echo "checked";
                                                                                }
                                                                              } ?>>Perempuan
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Tempat Lahir</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?php if (isset($_GET['idedit'])) {
                                                                                          echo $row['tmp_lahir'];
                                                                                        } ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Tanggal Lahir</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div>
        <input id="tgl_lahir" name="tgl_lahir" value="<?php if (isset($_GET['idedit'])) {
                                                        echo $row['tgl_lahir'];
                                                      } ?>" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Email</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div>
        <input id="email" name="email" value="<?php if (isset($_GET['idedit'])) {
                                                echo $row['email'];
                                              } ?>" type="email" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Kartu</label>
    <div class="col-8">
      <?php
      $sqljenis = "SELECT * FROM kartu";
      $rsjenis = $dbh->query($sqljenis);
      ?>
      <select id="kartu_id" name="kartu_id" class="custom-select">
        <?php
        if (isset($_GET['idedit'])) {
          $sqlkartu = "SELECT * FROM kartu WHERE id=?";
          $stkartu = $dbh->prepare($sqlkartu);
          $stkartu->execute([$row['kartu_id']]);
          $rowkartu = $stkartu->fetch();
        ?>
          <option value="<?= $rowkartu['id'] ?>"><?= $rowkartu['nama'] ?></option>
        <?php
        }
        foreach ($rsjenis as $rowjenis) {
        ?>
          <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
        <?php
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                                                                                        echo "Update";
                                                                                      } else {
                                                                                        echo "Simpan";
                                                                                      } ?>" />
    </div>
  </div>
</form>