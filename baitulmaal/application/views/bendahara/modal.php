<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">

<div class="card mb-2">
    <div class="card-header bg-success text-white">
      <i class="fas fa-file-invoice-dollar"></i> Laporan Perubahan Dana
    </div>
    <div class="card-body">
      <form class="form-inline" action="<?php echo base_url('bendahara/PerubahanModal/print')?>" method="POST" target="_blank">

        <input type="hidden" name="nilaifilter" value="2">

        <div class="form-group mb-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalawal" class="form-control ml-2" required="">
        </div>

        <div class="form-group mb-2 ml-2">
          <label for="staticEmail12">Tanggal: </label>
          <input type="date" name="tanggalakhir" class="form-control ml-2" required="">
        </div>
        <button type="submit"class="btn btn-secondary mb-3 ml-auto"><i class="fas fa-print"></i> Print</button>
      </form>
    </div>
  </div>

    <div class="alert alert-success">
      Menampilkan Laporan Perubahan Dana
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
             <!-- Dana zakat -->
              <tr class="text-center" style="color:black;">
                  <td colspan="5">Dana Zakat</td>
              </tr>
              <?php foreach ($P1zakat as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penerimaan Zakat:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1zakat->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2zakat as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penyaluran Zakat:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2zakat->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Zakat:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Szakat->saldo,0,'','.');?></td>
            </tr>

            <!-- Dana Infak -->
              <tr class="text-center" style="color:black;">
                  <td colspan="5">Dana Infak</td>
              </tr>
              <?php foreach ($P1infak as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penerimaan Infak:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1infak->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2infak as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penyaluran Infak:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2infak->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Infak:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Sinfak->saldo,0,'','.');?></td>
            </tr>


            <!-- Dana wakaf -->
              <tr class="text-center" style="color:black;">
                <td colspan="5">Dana Wakaf</td>
              </tr>
              <?php foreach ($P1wakaf as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penerimaan Wakaf:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1wakaf->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2amil as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penyaluran Wakaf:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2wakaf->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Wakaf:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Swakaf->saldo,0,'','.');?></td>
            </tr>



            <!-- Dana Amil -->
              <tr class="text-center" style="color:black;">
                <td colspan="5">Dana Amil</td>
              </tr>
              <?php foreach ($P1amil as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penerimaan Amil:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1amil->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2amil as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penyaluran Amil:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2amil->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Amil:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Samil->saldo,0,'','.');?></td>
            </tr>

            <!-- Dana Nonhalal -->
              <tr class="text-center"style="color:black;">
                <td colspan="5">Dana Nonhalal</td>
              </tr>
              <?php foreach ($P1nonhalal as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>
              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penerimaan Nonhalal:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P1nonhalal->saldo,0,'','.');?></td>
              </tr>

              <?php foreach ($P2nonhalal as $row):?>
              <tr>
                <td width="20"></td>
                  <td><?=$row->akun;?></td>
                  <td><?=number_format($row->t_debet,0,'','.');?></td>
                  <td><?=number_format($row->t_kredit,0,'','.');?></td> 
                  <td></td>
              </tr>

              <?php endforeach;?>
              <tr style="color:black;">
                <th colspan="2">Total Penyaluran Nonhalal:</th>
                <td></td>
                <td></td>
                <td><?=number_format($t_P2nonhalal->saldo,0,'','.');?></td>
              </tr>

            <tr class="text-center" style="color:black;">
              <th colspan="2" class="text-success">Surplus (Devisit) Dana Nonhalal:</th>
              <td></td>
              <td></td>
              <td class="text-success"><?=number_format($t_Snonhalal->saldo,0,'','.');?></td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

</div>
</div>