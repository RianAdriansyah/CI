<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin ingin logout ?
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
          <a href="#" data-dismiss="modal" class="btn btn-danger btn-block homebutton" role="button">Tidak</a>
        </div>
        <div class="col-sm-6">
          <a href="<?= base_url(); ?>admin/logout" class="btn btn-primary btn-block homebutton" role="button">Iya</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?= base_url('/'); ?>vendors/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('/'); ?>vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('/'); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('/'); ?>assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?= base_url('/'); ?>vendors/jquery/dist/jquery.chained.min.js"></script>
<script>
  $("#jurusan").chained("#fakultas");
</script>
<script src="<?= base_url('/'); ?>vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="<?= base_url('/'); ?>assets/js/dashboard.js"></script>
<script src="<?= base_url('/'); ?>assets/js/widgets.js"></script>
<script src="<?= base_url('/'); ?>vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?= base_url('/'); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="<?= base_url('/'); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script>
  (function($) {
    "use strict";

    jQuery('#vmap').vectorMap({
      map: 'world_en',
      backgroundColor: null,
      color: '#ffffff',
      hoverOpacity: 0.7,
      selectedColor: '#1de9b6',
      enableZoom: true,
      showTooltip: true,
      values: sample_data,
      scaleColors: ['#1de9b6', '#03a9f5'],
      normalizeFunction: 'polynomial'
    });
  })(jQuery);
</script>

</body>

</html>