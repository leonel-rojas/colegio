<?php
echo $this->Html->script('/lib/jquery/jquery');
echo $this->Html->script('/lib/jquery-ui/jquery-ui');
echo $this->Html->script('/lib/bootstrap/js/bootstrap');
echo $this->Html->script('/lib/jquery-toggles/toggles');

/*
echo $this->Html->script('/lib/flot/jquery.flot');
echo $this->Html->script('/lib/flot/jquery.flot.resize');
echo $this->Html->script('/lib/flot/jquery.flot.symbol');
echo $this->Html->script('/lib/flot/jquery.flot.crosshair');
echo $this->Html->script('/lib/flot/jquery.flot.categories');
echo $this->Html->script('/lib/flot/jquery.flot.pie');
echo $this->Html->script('/lib/flot-spline/jquery.flot.spline');
echo $this->Html->script('/lib/morrisjs/morris');
echo $this->Html->script('/lib/raphael/raphael');
echo $this->Html->script('/lib/jquery-sparkline/jquery.sparkline');
*/
echo $this->Html->script('/js/Chart.bundle');
echo $this->Html->script('/js/Chart');

echo $this->Html->script('/lib/datatables/jquery.dataTables');
echo $this->Html->script('/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap');
echo $this->Html->script('/lib/select2/select2');
echo $this->Html->script('/lib/jquery.steps/jquery.steps');
echo $this->Html->script('/lib/jquery-validate/jquery.validate');

echo $this->Html->script('/js/quirk');
?>
<script>
$(document).ready(function() {

  'use strict';

  $('#dataTable1').DataTable();
  $('#dataTable2').DataTable();

  // Select2
  $('select').select2({ minimumResultsForSearch: Infinity });

  //$('#datepicker').datepicker();

  // Basic Form
  $('#basicForm').validate({
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      $(element).closest('.form-group').removeClass('has-error');
    }
  });

});
</script>
