<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">
   <div class="alert alert-success" role="alert">
    <i class="fas fa-book"></i> Daftar Piutang
   </div>
</section>

<section class="content ">

  <?php echo $this->session->flashdata('pesan') ?>

  <div class="card mb-2">
    <div class="card-header bg-success text-white">
    </div>
    <div class="card-body">
      <form class="form-inline">
          <a class="btn btn-sm btn-success mt-2 mb-2" href="<?php echo base_url('bendahara/piutang/tambahData') ?>">
          <i class="fas fa-plus"></i> Tambah Data</a>
          <a class="btn btn-sm btn-primary mt-2 mb-2 ml-3" href="<?php echo base_url('bendahara/piutang/tampilData') ?>">
          <i class="fas fa-eye"></i> Tampilkan Data</a>
      </form>
    </div>
  </div>

         <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <tbody>
             <tr class="text-center">
              <th width="120px">Nomor</th>
              <th>Tanggal</th>
              <th width="100px">No Reff</th>
              <th>Akun</th>
              <th>Keterangan</th>
              <th>Debet</th>
              <th>Kredit</th>
            </tr>
        
            <?php 
            $JDebet=0;
            $JKredit=0;
            $no = 1;
                 foreach ($piutang as $ptg) :  ?>
            <tr align="center">
                    <td width="20px"><?php echo $no++ ?></td>
                    <td><?php echo $ptg->tgl ?></td>
                    <td><?php echo $ptg->no_reff ?></td>
                    <td><?php echo $ptg->akun ?></td>
                    <td><?php echo $ptg->keterangan ?></td>
                    <td><?php echo number_format($ptg->debet,0,',','.'); ?></td>
                    <td><?php echo number_format($ptg->kredit,0,',','.'); ?></td>

               <?php $JDebet+=$ptg->debet;?>
               <?php $JKredit+=$ptg->kredit; ?>
            </tr>
            <?php endforeach; ?>

            <?php if($JDebet != $JKredit){ ?>
            <tr>
              <td colspan="5" class="text-center"><b>Jumlah Total</b></td>
              <td><b><?= 'Rp. '.number_format($JDebet,0,',','.') ?></b></td>
              <td><b><?= 'Rp. '.number_format($JKredit,0,',','.') ?></b></td>
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