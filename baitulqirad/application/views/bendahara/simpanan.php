<div class="container-fluid" style="margin-button:100px;">
<div class="content-wrapper">

<section class="content ">

  <?php echo $this->session->flashdata('pesan') ?>

  <div class="card mb-2">
    <div class="card-header bg-success text-white">
      <i class="fas fa-journal-whills"></i> Simpanan
    </div>
    <div class="card-body">
      <form class="form-inline" action="<?php echo base_url('bendahara/simpanan/filter')?>" method="POST">

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

        <div class="form-group mb-2 ml-3">
          <label for="staticEmail12">Tahun: </label>
          <select class="form-control ml-2" name="tahun1">
            <option value="">--Pilih Tahun--</option>
            <?php foreach($tahun as $row): ?>
              <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>
            <?php endforeach ?>
          </select>
        </div>

        <button type="submit" class="btn btn-success mb-3 ml-auto"><i class="fas fa-eye"></i> Tampilkan</button>
        <a class="btn btn-primary mb-3 ml-2" href="<?php echo base_url('bendahara/simpanan/tambahSimpan') ?>">
          <i class="fas fa-plus"></i> Tambah Simpanan</a>
      </form>
    </div>
  </div>

    <div class="alert alert-success">
      Menampilkan Simpanan
    </div>

       <!-- DataTales Example -->
  <div class="card mb-4 mt-2">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <tbody>
             <tr class="text-center">
              <th width="120px">Tanggal</th>
              <th>Nama</th>
              <th>Simpanan Pokok</th>
              <th>Simpanan Wajib</th>
              <th>Simpanan Sukarela</th>
            </tr>
        
            <?php 
            foreach($simpan as $row) : ?>
            <tr>
              <td><?php echo $row->tgl_simpan; ?></td>
              <td><?php echo $row->nama; ?></td>
              <td><?php echo $row->simpanan_pokok; ?></td>
              <td><?php echo $row->simpanan_wajib; ?></td>
              <td><?php echo $row->simpanan_sukarela; ?></td>
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