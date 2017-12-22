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
          ['Data' <?php foreach($years as $y){echo ",'".$y['tahun_wisuda']."'";} ?>],
          <?php foreach($jml as $key => $i){
                echo "['".$key."'"; 
                foreach($years as $j){?>
                  <?php if(isset($i[$j['tahun_wisuda']])){ echo ",".$i[$j['tahun_wisuda']];}else{echo ",0";} ?>
          <?php }
                echo "],";
                  } ?>
          // ['FIP',10,20,'FIP'],
          // ['FPA',10,20,'FPA'],

        ]);
      

        var options = {
          title: 'Jumlah Data Skripsi Mahasiswa Universitas Pendidikan Indonesia',
          width: 1000 ,
          height: 700 ,
          // height: 500,
          bar: {groupWidth: "90%"},
          // legend: { position: "none" },
          // series: { 0: {color: '#B22222'},1:{color: 'blue'}},  
          // is3D: true, 
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
          function selectHandler() {
            var selectedItem = chart.getSelection()[0];
            if (selectedItem) {
              var value = data.getValue(selectedItem.row, 0);
              window.location = "<?php echo base_url(); ?>Welcome/grafik/"+value;
            }
          }

        // Listen for the 'select' event, and call my function selectHandler() when
        // the user selects something on the chart.
        google.visualization.events.addListener(chart, 'select', selectHandler);
        chart.draw(data, options);
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