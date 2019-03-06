
<div class="container">
  <div class="row">
    <div class="col">
      

<div class="card">
    <div class="card-header">
      <div class="card-title">Data Daerah</div>
                  </div>
                  <div class="card-body">
                    <div class="card-sub">                  
                      Data Daerah Sistem Sensus Penduduk 
                    </div>
    <small>
      <button type="button" class="btn btn-primary mb-3 tampilModalTambah" data-toggle="modal" data-target="#formModal">
  Tambah Data
</button>
    </small>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <div class="modul" data-modul="Data Daerah"></div>
    <div class="table-responsive">
      <table class="table table-hover" id="myTable" class="myTable">

        <thead class=" thead-light">
          <tr>
            <th width="10%">No</th>
            <th>Nama Daerah</th>
            <th>Jumlah Penduduk</th>
            <th>Total Pendapatan</th>
            <th>Rata Rata Pendapatan</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($record->result() as $r) :
            ?>
            <tr>
            <td><?= $no ?></td>
            <td><?= $r->name ?></td>
            <td><?= $r->jumlah_penduduk ?></td>
            <td><?= $r->jumlah_pendapatan ?></td>
            <td><?= $r->jumlah_rata_rata ?></td>
            <td><?php if($r->jumlah_rata_rata <= 1700000){
              echo "<button type='button' class='btn btn-danger' disabled></button>";
            } 
            elseif($r->jumlah_rata_rata >= 1700000 && $r->jumlah_rata_rata <= 2200000) {
              echo "<button type='button' class='btn btn-warning' disabled></button>";
            }
            else {
              echo "<button type='button' class='btn btn-success' disabled></button>";
            }


            ?></td>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Daerah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
    echo  form_open(base_url().'data_daerah/post','class="form-horizontal form-data"', array("id" => "form-data"));
    ?>
    <input type="hidden" name="id" id="id" value="">
        <div class="form-group">
          <label for="nama">Nama Daerah</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Daerah">
            
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
