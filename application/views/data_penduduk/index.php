
<div class="container">
  <div class="row">
    <div class="col">
      

<div class="card">
    <div class="card-header">
      <div class="card-title">Data Penduduk</div>
                  </div>
                  <div class="card-body">
                    <div class="card-sub">                  
                      Data Penduduk Sistem Sensus Penduduk
                    </div>
    <small>
      <button type="button" class="btn btn-primary mb-3 tampilModalTambah" data-toggle="modal" data-target="#formModal">
  Tambah Data
</button>
<?php
    echo form_open(base_url().'data_penduduk/filter/','class="form-horizontal form-cari"', array("id" => "form-cari"));
    ?>
<div class="form-group">
    <label for="exampleFormControlSelect1">Filter Data Sesuai Daerah</label>
    <select class="form-control" id="filter" name="filter">
      <option value="<?= base_url(); ?>data_penduduk" selected>Semua Daerah</option>
              <?php foreach ($daerah as $dr) : ?>
                  
                        <option value='<?= base_url(); ?>data_penduduk/filter/<?= $dr->id ?>'><?= $dr->name ?></option>";

              <?php endforeach;  ?>
    </select>
  </div>
  <button type="submit" id="submit" class="btn btn-primary mb-3 ml-2">Cari</button>
</form>
    </small>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <div class="modul" data-modul="Data Penduduk"></div>
    <div class="table-responsive">
      <table class="table table-hover" id="myTable" class="myTable">

        <thead class=" thead-light">
          <tr>
            <th width="10%">No</th>
            <th>Nama Penduduk</th>
            <th>Gaji</th>
            <th>Daerah</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($record->result() as $r) :
            ?>
            <tr>
            <td><?= $no ?></td>
            <td><?= $r->penduduk ?></td>
            <td><?= $r->income ?></td>
            <td><?= $r->daerah ?></td>

            <td><?= anchor(base_url().'data_penduduk/edit/'.$r->id,'<i class="la la-edit"></i>', array('title' => 'Edit','class' => 'btn btn-primary tampilModalUbah', 'data-toggle' => 'modal', 'data-target' => '#formModal', 'data-id' => $r->id)) ?>  
            <?= anchor(base_url().'data_penduduk/hapus/'.$r->id,'<i class="la la-trash"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger tombol-hapus')) ?></td>
            </tr>
            <?php $no++; ?>
        <?php endforeach;  ?>
        </tbody>
      </table>
      </div>
    </div>

</div>
  </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Penduduk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
    echo form_open(base_url().'data_penduduk/post','class="form-horizontal form-data"', array("id" => "form-data"));
    ?>
    <input type="hidden" name="id" id="id" value="">
        <div class="form-group">
          <label for="nama">Nama Daerah</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Daerah">
        </div>
    <div class="form-group">
          <label for="kode">Daerah</label>
            <select class="custom-select" name="region_id" id="region_id">
            <?php
                foreach ($daerah as $dr) {
                  echo "<option value='$dr->id'>$dr->name</option>";
                }
              ?>
  </select>
        </div>
        <div class="form-group">
          <label for="nama">Alamat</label>
            <textarea class="form-control" name="address" id="address" placeholder="Alamat"></textarea>
        </div>
        <div class="form-group">
          <label for="nama">Pendapatan</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
            </div>
                <input type="text" class="form-control" id="income" name="income" aria-label="Nominal Rupiah" placeholder="Nominal Rupiah">
            <div class="input-group-append">
            <span class="input-group-text">.00</span>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" id='submit_button' value="<?php echo $this->session->userdata('created_by'); ?>" class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
    </div>
  </div>
</div>
