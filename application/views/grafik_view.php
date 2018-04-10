<!DOCTYPE html>
<html>
<head>
	<title>Grafik komentar</title>

</head>
<body>
<div style="text-align:center">
	<h1>
		GRAFIK JUMLAH KOMENTAR TIAP BULAN
	</h1>
</div>
<br><br><br>
<div style="text-align:center">
		<?php
	        foreach($data as $data){
	            $bulan[] = $data->bulan;
	            $satuan[] = $data->satuan;
	        }
	    ?>
	<canvas id="canvas" width="1000" height="280"></canvas>
</div>
<br><br><br>
<div style="text-align:center">
<button>
	<a href="<?php echo base_url()?>" style="text-decoration:none">
		Kembali
	</a>
</button>
</div>
	<!--Load chart js-->
	<script type="text/javascript" src="<?php echo base_url('assets/chartjs/chart.min.js')?>"></script>
	<script>

            var lineChartData = {
                labels : <?php echo json_encode($bulan);?>,
                datasets : [
                    {
                        fillColor: "rgba(196,168,173,0.8)",
                        strokeColor: "rgba(161,31,66,0.8)",
                        pointColor: "#a11f42",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($satuan);?>
                    }
                ]
            }
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
   	</script>
</body>
</html>
