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
    <script>
    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
        
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Universitas', 'Jumlah'],
          <?php 
            foreach($jml as $row){
           ?>
           <?php echo "['".$row['jurusan']."',".$row['num']."]," ?>

         <?php } ?>

        ]);
      
        var view = new google.visualization.DataView(data);
        view.setColumns ([0, 1,
                  { calc: "stringify",
                   sourceColumn: 1,
                   type: "string",
                   role: "annotation" }
                ]);

        var options = {
          title: 'Jumlah Data Skripsi Mahasiswa '+'<?php echo $this->uri->segment(3); ?>',
          width: 1000,
          height: 700,
          bar: {groupWidth: "95%"},
          legend: { position: "none" }, 
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
          // function selectHandler() {
          //   var selectedItem = chart.getSelection()[0];
          //   if (selectedItem) {
          //     var value = data.getValue(selectedItem.row, 0);
          //     window.location = "<?php echo base_url(); ?>/Welcome/grafik/"+value;
          //   }
          // }

          // // Listen for the 'select' event, and call my function selectHandler() when
          // // the user selects something on the chart.
          // google.visualization.events.addListener(chart, 'select', selectHandler);
          chart.draw(view, options);
          chart.draw(view, options);
          }
      $('#siskrip').DataTable({
        responsive:true
      });
    </script>    
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>

    
    
</body>
</html>