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
          <a class="btn btn-sm btn-success mt-2 mb-2" href="<?php echo base_url('bendahara/piutang') ?>">
           Kembali</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th width="120px">Nomor</th>
              <th>Tanggal</th>
              <th>No Reff</th>
              <th>Akun</th>
              <th>Nama</th>
              <th>Keterangan</th>
              <th>NIK</th>
              <th>Hak Akses</th>
              <th>Debet</th>
              <th>Kredit</th>
              
            </tr>
          </thead>
          <tbody>
            <?php 
            $JDebet=0;
            $JKredit=0;
            $no = 1;
                 foreach ($piutang as $ptg) :  ?>
            <tr align="center">
                    <td width="20px"><?php echo $no++ ?></td>
                    <td><?php echo $ptg->tgl_pinjam ?></td>
                    <td><?php echo $ptg->no_reff ?></td>
                    <td><?php echo $ptg->akun ?></td>
                    <td><?php echo $ptg->nama ?></td>
                    <td><?php echo $ptg->keterangan ?></td>
                    <td><?php echo $ptg->nik ?></td>
                    <td><?php echo $ptg->hak_akses ?></td>
                    <td><?php echo $ptg->debet ?></td>
                    <td><?php echo $ptg->kredit ?></td>

               <?php $JDebet+=$ptg->debet;?>
               <?php $JKredit+=$ptg->kredit; ?>
            </tr>
            <?php endforeach; ?>

            <?php if($JDebet != $JKredit){ ?>
            <tr>
              <td colspan="8" class="text-center"><b>Jumlah Total</b></td>
              <td><b><?= $JDebet ?></b>gr</td>
              <td><b><?= $JKredit ?></b>gr</td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</section>
</div>
</div>