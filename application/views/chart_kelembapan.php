<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tampilan Dari Kelembapan Tanah</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/charts/css/morris.css' ?>">
</head>

<body>
    <h2 class="h3 mb-4 text-gray-800" style="text-align:center">Tampilan Dari Kelembapan Tanah</h2>

    <div id="graph"></div>

    <script src="<?php echo base_url() . 'assets/charts/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/charts/js/raphael-min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/charts/js/morris.min.js' ?>"></script>
    <script>
        Morris.Bar({
            element: 'graph',
            data: <?php echo $data; ?>,
            xkey: 'siraman_air',
            ykeys: ['nilai_eksas', 'nilai_perkiraan', 'galat'],
            labels: ['nilai_eksas', 'nilai_perkiraan', 'galat']
        });
    </script>
    <a href="<?= base_url('menu'); ?>">Back</a>
</body>

</html>