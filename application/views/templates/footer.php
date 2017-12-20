<!--BAGIAN FOOTER DIKEMBANGKAN OLEH-->
    <div class="col-md-4">
        <p class="pull-left">Copyright &copy; 2017 DIRTIK</p>
    </div>
    
    <div class="col-md-8">
        <p class="list-inline navbar-right">Dikembangkan Oleh: <a href="http://www.github.com/anitapertiwi" target="_blank">Anita</a>
         & <a href="https://www.facebook.com/asryrahayuu" target="_blank">Asry</a> 
         & <a href="http://www.linkedin.com/in/fadhila-ulva" target="_blank">Ulva</a></p>
    </div>


<body>

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
          ['FIP', 'Jumlah'],
          ['FIP',<?php echo $jml_FIP;?>],
          ['FPIPS',<?php echo $jml_FPIPS;?>],
          ['FPBS',<?php echo $jml_FPBS;?>],
          ['FPMIPA',<?php echo $jml_FPMIPA;?>],
          ['FPTK',<?php echo $jml_FPTK;?>],
          ['FPEB',<?php echo $jml_FPEB;?>],
          ['FPOK',<?php echo $jml_FPOK;?>],
          ['FPSD',<?php echo $jml_FPSD;?>],
        ]);
      
        var view = new google.visualization.DataView(data);
        view.setColumns ([0, 1,
                  { calc: "stringify",
                   sourceColumn: 1,
                   type: "string",
                   role: "annotation" }
                ]);

        var options = {
          title: 'Jumlah Data Skripsi Mahasiswa Universitas Pendidikan Indonesia',
          width: 700 ,
          height: 500,
          bar: {groupWidth: "95%"},
          legend: { position: "none" }, 
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
          function selectHandler() {
            var selectedItem = chart.getSelection()[0];
            if (selectedItem) {
              var value = data.getValue(selectedItem.row, 0);
              window.location = "<?php echo base_url(); ?>/Welcome/grafik/"+value;
            }
          }

          // Listen for the 'select' event, and call my function selectHandler() when
          // the user selects something on the chart.
          google.visualization.events.addListener(chart, 'select', selectHandler);
          chart.draw(view, options);
          }
      $('#siskrip').DataTable({
        responsive:true
      });
    </script>    
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
  
<!--FOOTER BERJALAN-->
    <body>
                <marquee bgcolor="yellow"style="font-family; Arial; font-size:16px;color:black;"align=bottom>JL.Dr Setiabudi No. 229,Bandung,West Java,40154, Indonesia ||  022-2005320, 1147 (Internal) || 08112011007 (SMS)</marquee>
            </body>
</body>
</html>