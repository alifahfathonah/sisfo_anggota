<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">
<section class="content-header">
   <div class="alert alert-success" role="alert">
    <i class="fas fa-calendar-week"></i> Agenda Khusus
   </div>
</section>

<section class="content ">

  <?php echo $this->session->flashdata('pesan') ?>

  <div class="card mb-2">
    <div class="card-header bg-success text-white">
      Filter Agenda Khusus
    </div>
    <div class="card-body">
      <form class="form-inline">
        <div class="form-group mb-2">
          <label for="staticEmail12">Bulan: </label>
          <select class="form-control ml-2" name="bulan">
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
        <div class="form-group mb-2 ml-3">
          <label for="staticEmail12">Tahun: </label>
          <select class="form-control ml-2" name="tahun">
            <option value="">--Pilih Tahun--</option>
            <?php $tahun = date('Y');
            for($i=2020;$i<$tahun+5;$i++) {?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
          </select>
        </div>
          <button type="submit" class="btn btn-success mb-2 ml-auto"><i class="fas fa-eye"></i> Tampilkan Agenda</button>
          <a class="btn btn-sm btn-success mb-2 ml-3" href="<?php echo base_url('ketua/agendaKhusus/tambahData') ?>">
          <i class="fas fa-plus"></i> Tambah Data</a>
      </form>
    </div>
  </div>

  <?php 
    if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
      $bulan = $_GET['bulan'];
      $tahun = $_GET['tahun'];
      $bulantahun = $bulan.$tahun;
    }else{
      $bulan = date('m');
      $tahun = date('Y');
      $bulantahun = $bulan.$tahun;
    }
   ?>
  <div class="alert alert-success">
    Menampilkan Agenda Khusus Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
  </div>

       <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Jam</th>
              <th>Agenda</th>
              <th>Lokasi</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php 
     $no = 1;
     foreach ($agendakk as $ak) :  ?>
     <tr align="center">
        <td width="20px"><?php echo $no++ ?></td>
        <td><?php echo $ak->tanggal ?></td>
        <td><?php echo $ak->jam ?></td>
        <td><?php echo $ak->agenda ?></td>
        <td><?php echo $ak->lokasi ?></td>
        <td><?php echo $ak->keterangan ?></td>
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