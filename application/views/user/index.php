
<div class="container">
  <div class="row">
    <div class="col">
      

<div class="card">
    <div class="card-header">
      <div class="card-title">Tipe Barang</div>
                  </div>
                  <div class="card-body">
                    <div class="card-sub">                  
                      Data Tipe Barang Inventaris Masjid
                    </div>
    <small>
      <button type="button" class="btn btn-primary mb-3 tampilModalTambah" data-toggle="modal" data-target="#formModal">
  Tambah Data
</button>
    </small>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <div class="modul" data-modul="Tipe Barang"></div>
    <div class="table-responsive">
      <table class="table table-hover" id="myTable" class="myTable">

        <thead class=" thead-light">
          <tr>
            <th width="10%">No</th>
            <th>Nama Tipe Barang</th>
            <th>Kode Tipe Barang</th>
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
            <td><?= $r->nama_tipe ?></td>
			      <td><?= $r->kode_tipe ?></td>

            <td><?= anchor(base_url().'tipe_barang/edit/'.$r->id_tipe,'<i class="la la-edit"></i>', array('title' => 'Edit','class' => 'btn btn-primary tampilModalUbah', 'data-toggle' => 'modal', 'data-target' => '#formModal', 'data-id' => $r->id_tipe)) ?>  
            <?= anchor(base_url().'tipe_barang/hapus/'.$r->id_tipe,'<i class="la la-trash"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger tombol-hapus')) ?></td>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Tipe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
    echo  form_open(base_url().'tipe_barang/post','class="form-horizontal form-tipe"', array("id" => "form-tipe"));
    ?>
    <input type="hidden" name="id_tipe" id="id_tipe" value="">
        <div class="form-group">
          <label for="nama">Nama Tipe</label>
            <input type="text" class="form-control" name="nama_tipe" id="nama_tipe" placeholder="Nama Tipe">
            
        </div>
    <div class="form-group">
          <label for="kode">Kode Tipe</label>
            <input type="text" class="form-control" name="kode_tipe" id="kode_tipe" placeholder="Kode Tipe">
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" id='submit_button' class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
    </div>
  </div>
</div>
