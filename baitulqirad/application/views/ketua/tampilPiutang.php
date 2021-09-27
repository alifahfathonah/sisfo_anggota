<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">
   <div class="alert alert-success" role="alert">
    <i class="fas fa-book"></i> Daftar Piutang
   </div>
</section>

<section class="content ">

 <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-header py-3">
          <a class="btn btn-sm btn-success mt-2 mb-2" href="<?php echo base_url('ketua/piutang') ?>">
           Kembali</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th width="120px">Nomor</th>
              <th>Tanggal</th>
              <th>Nama</th>
              <th>Debet</th>
              <th>Kredit</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $JDebet=0;
            $no = 1;
                 foreach ($piutang as $ptg) :  ?>
            <tr align="center">
                    <td width="20px"><?php echo $no++ ?></td>
                    <td><?php echo $ptg->tgl_pinjam ?></td>
                    <td><?php echo $ptg->nama ?></td>
                    <td><?php echo $ptg->debet ?></td>
                    <td><?php echo $ptg->kredit ?></td>
                    <td><?php echo $ptg->keterangan ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</section>
</div>
</div>