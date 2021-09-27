<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">

  <?php echo $this->session->flashdata('pesan') ?>

  <div class="card mb-2">
    <div class="card-header bg-success text-white">
      <i class="fas fa-journal-whills"></i> Jurnal Umum
    </div>
    <div class="card-body">
      <form class="form-inline" action="<?php echo base_url('bendahara/jurnal/filter')?>" method="POST">

        <input type="hidden" name="nilaifilter" value="1">

        <div class="form-group mb-2">
          <label for="staticEmail12">Bulan: </label>
          <select class="form-control ml-2" name="bulanawal">
            <option value="">--Pilih Bulan--</option>
            <option value="01">Januari</option>
            <option value="02">Feburari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
          </select>
        </div>

        <div class="form-group mb-2 ml-2">
          <label for="staticEmail12">Bulan: </label>
          <select class="form-control ml-2" name="bulanakhir">
            <option value="">--Pilih Bulan--</option>
            <option value="01">Januari</option>
            <option value="02">Feburari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
          </select>
        </div>

        <div class="form-group mb-3 ml-3">
          <label for="staticEmail12">Tahun: </label>
          <select class="form-control ml-2" name="tahun1">
            <option value="">--Pilih Tahun--</option>
            <?php foreach($tahun as $row): ?>
              <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>
            <?php endforeach ?>
          </select>
        </div>

        <button type="submit" class="btn btn-success mb-3 ml-auto"><i class="fas fa-eye"></i> Tampilkan Jurnal</button>
        <a class="btn btn-primary mb-3 ml-2" href="<?php echo base_url('bendahara/jurnal/tambahJurnal') ?>">
          <i class="fas fa-plus"></i> Tambah Jurnal</a>
      </form>
    </div>
  </div>

    <div class="alert alert-success">
    <?php echo $subtitle ?>
    </div>

       <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <tbody>
             <tr class="text-center">
              <th width="120px">Tanggal</th>
              <th width="100px">No Reff</th>
              <th>Akun</th>
              <th>Keterangan</th>
              <th>Penerimaan</th>
              <th>Penyaluran</th>
            </tr>
        
            <?php 
            $JDebet=0;
            $JKredit=0;
            foreach($laporan as $row) : ?>
            <tr>
              <td><?php echo $row->tgl; ?></td>
              <td><?php echo $row->no_reff; ?></td>
              <td><?php echo $row->akun; ?></td>
              <td><?php echo $row->keterangan; ?></td>
              <td><?php echo number_format($row->debet,0,',','.'); ?></td>
              <td><?php echo number_format($row->kredit,0,',','.'); ?></td>

               <?php $JDebet+=$row->debet;?>
               <?php $JKredit+=$row->kredit; ?>
            </tr>
            <?php endforeach; ?>

            <?php if($JDebet != $JKredit){ ?>
            <tr>
              <td colspan="4" class="text-center"><b>Jumlah Total</b></td>
              <td class="text-danger"><b><?= 'Rp. '.number_format($JDebet,0,',','.') ?></b></td>
              <td class="text-danger"><b><?= 'Rp. '.number_format($JKredit,0,',','.') ?></b></td>
            </tr>
            <tr class="text-center bg-danger">
              <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px">TIDAK SEIMBANG</td>
            </tr>
            <?php }else{  ?>
              <tr>
              <td colspan="4" class="text-center"><b>Jumlah Total</b></td>
              <td class="text-success"><b><?= 'Rp. '.number_format($JDebet,0,',','.') ?></b></td>
              <td class="text-success"><b><?= 'Rp. '.number_format($JKredit,0,',','.') ?></b></td>
            </tr>
            <tr  class="text-center bg-success ">
              <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px">SEIMBANG</td>
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