

    </div>
    <!-- End of Content Wrapper -->

            <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sistem Muamalah Digital 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
    <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#dataTables').dataTable();
    });
</script>

<script type="text/javascript">
function getkodeakundebet(){
  var namaakun = $('[name="akun_debet"]').val();
  $.ajax({
    url: '<?=base_url();?>bendahara/jurnal/viewKode',
    method: "POST",
    data: {
      akun : namaakun
    },
    dataType: 'json',
    success: function(hasil){
      $('[name="no_reff_debet"]').val(hasil.no_reff);
      $('[name="id_akun_debet"]').val(hasil.id_akun);
    }
  });
}
function getkodeakunkredit(){
  var namaakun = $('[name="akun_kredit"]').val();
  $.ajax({
    url: '<?=base_url();?>bendahara/jurnal/viewKode',
    method: "POST",
    data: {
      akun : namaakun
    },
    dataType: 'json',
    success: function(hasil){
      $('[name="no_reff_kredit"]').val(hasil.no_reff);
      $('[name="id_akun_kredit"]').val(hasil.id_akun);
    }
  });
}
</script>

</body>

</html>
