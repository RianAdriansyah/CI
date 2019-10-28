<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?= base_url('/'); ?>vendors/jquery/dist/jquery.chained.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script>
  $("#jurusan").chained("#fakultas");
</script>
<script>
  $("#perihal").chained("#divisi");
</script>
<script>
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<script>
  $('input[name="rdbutton"]').on('change', function() {
    $('select[name="fakultas"]').attr('disabled', this.value != "Enable")
  });
  $('input[name="rdbutton"]').on('change', function() {
    $('select[name="jurusan"]').attr('disabled', this.value != "Enable")
  });

  $('input[name="rdbutton"]').on('change', function() {
    $('select[name="unit"]').attr('disabled', this.value == "Enable")
  });
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>