     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url("assets/js/jquery.metisMenu.js"); ?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url("assets/js/morris/raphael-2.1.0.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/morris/morris.js"); ?>"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables/jquery.dataTables.js"></script>    
    <script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>$('#MyModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Detail Penulis')
        modal.find('.modal-body input').val(recipient)
        modal.find('#labelNIM').text(button.data('nim'))
        modal.find('#labelTahun').text(button.data('tahun'))
        modal.find('#labelPenulis').text(button.data('penulis'))
        modal.find('#labelEmail').text(button.data('email'))
        modal.find('#labelJudul').text(button.data('judul'))
        modal.find('#labelJurusan').text(button.data('jurusan'))
        modal.find('#labelFakultas').text(button.data('fakultas'))
        modal.find('#labelDosbing').text(button.data('dosbing'))
        modal.find('#labelDospem').text(button.data('dospem'))
        modal.find('#labelAbstrak').text(button.data('abstrak'))
      });</script>
    <script>
    
      $('#siskrip').DataTable({
        responsive:true
      });

    </script>    
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
    
    
    
</body>
</html>