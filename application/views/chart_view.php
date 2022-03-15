<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tampilan Dari Temperatur Suhu</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/charts/css/morris.css' ?>">
</head>

<body>
    <h2 class="h3 mb-4 text-gray-800" style="text-align:center">Tampilan Dari Temperatur Suhu</h2>

    <div id="graph"></div>

    <script src="<?php echo base_url() . 'assets/charts/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/charts/js/raphael-min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/charts/js/morris.min.js' ?>"></script>
    <script>
        Morris.Bar({
            element: 'graph',
            data: <?php echo $data; ?>,
            xkey: 'suhu',
            ykeys: ['hasil_akhir_alat_penulis', 'hasil_akhir_alat_pembanding', 'error'],
            labels: ['hasil_akhir_alat_penulis', 'hasil_akhir_alat_pembanding', 'error']
        });
    </script>
    <a href="<?= base_url('admin'); ?>">Back</a>
</body>

</html>