<script>
  $(document).ready(function()
  {
    $("#inputnama").autocomplete({
      source : "<?php echo site_url('Transaksi/get_autocomplete') ?>",

      select: function(event, ui){
        $('[name="nameB"]').val(ui.item.label);
        $('[name="kodeB"]').val(ui.item.kodeB);
        $('[name="jumlah"]').val(ui.item.jumlah);

      }
    });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>