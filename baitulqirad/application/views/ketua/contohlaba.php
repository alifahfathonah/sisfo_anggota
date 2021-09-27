<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">

  <?php echo $this->session->flashdata('pesan') ?>

<div class="card mb-2">
    <div class="card-header bg-success text-white">
      <i class="fas fa-balance-scale-right"></i> Laporan Laba Rugi
    </div>
    <div class="card-body">
      <form class="form-inline" action="<?php echo base_url('ketua/LabaRugi/teslaba')?>" method="POST">

        <input type="hidden" name="nilaifilter" value="2">

        <div class="form-group mb-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalawal" class="form-control ml-2" required="">
        </div>

        <div class="form-group mb-2 ml-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalakhir" class="form-control ml-2" required="">
        </div>
        <button type="submit"class="btn btn-primary mb-3 ml-auto"><i class="fas fa-eye"></i> Tampilakan</button>
      </form>
    </div>
  </div>

    <div class="alert alert-success">
      Menampilkan Laporan Laba Rugi
    </div>

        <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <tbody>
             <tr class="text-center">
              <th colspan="5">Dari tanggal <?=$date['awal'];?> sampai <?=$date['akhir'];?></th>
            </tr>
            <tr style="color:black;">
                <td colspan="5">Pendapatan</td>
            </tr>
            <?php foreach ($pendapatan as $row):?>
            <tr>
              <td width="20"></td>
                <td><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet,0,'','.');?></td>
                <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                <td></td>

                <!-- <td>
                  <?=getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit!=0?'<span style="margin-left:0px;">'.number_format(getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit,0,'','.').'</span>':0;?>

                </td> -->
            </tr>
            <?php endforeach;?>

            <tr style="color:black;">
              <th colspan="2">Total Pendapatan Bersih</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_pendapatan->saldo,0,'','.');?></td>
            </tr>


            <tr style="color:black;">
                <td colspan="5">Harga Pokok Penjualan:</td>
            </tr>
            <?php foreach ($hpp as $row):?>
            <tr>
              <td width="20"></td>
                <td><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet,0,'','.');?></td>
                <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                <td></td>

                <!-- <td>
                  <?=getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit!=0?'<span style="margin-left:0px;">'.number_format(getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit,0,'','.').'</span>':0;?>

                </td> -->
            </tr>
            <?php endforeach;?>

            <tr style="color:black;">
              <th colspan="2">Total Harga Pokok Penjualan</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_hpp->saldo,0,'','.');?></td>
            </tr>


            <tr style="color:black;">
              <th colspan="2" class="text-success">Total Laba Kotor</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_kotor->saldo,0,'','.');?></td>
            </tr>


            <tr style="color:black;">
                <td colspan="5">Beban Operasional:</td>
            </tr>
            <?php foreach ($biaya as $row):?>
            <tr>
              <td width="20"></td>
                <td><?=$row->akun;?></td>
                <td><?=number_format($row->t_debet,0,'','.');?></td>
                <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                <td></td>

                <!-- <td>
                  <?=getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit!=0?'<span style="margin-left:0px;">'.number_format(getAkunNominal($row->no_reff,$row2->thn.'-'.$row2->bln.'-'.$row2->hari)->t_kredit,0,'','.').'</span>':0;?>

                </td> -->
            </tr>
            <?php endforeach;?>

            <tr style="color:black;">
              <th colspan="2">Total Beban Operasional</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_biaya->saldo,0,'','.');?></td>
            </tr>

            <tr style="color:black;">
              <th colspan="2">Laba Bersih Operasional</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_biaya->saldo,0,'','.');?></td>
            </tr>

            <tr style="color:black;">
              <th colspan="2" class="text-success">Laba/Rugi Bersih</th>
              <td></td>
              <td></td>
              <td><?=number_format($t_bersih->saldo,0,'','.');?></td>
            </tr>



          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

</div>
</div>