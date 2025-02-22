<html lang="en"><head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?=ASET;?>/images/favicon-32x32.png" type="image/png">
	<!--plugins-->
	<link href="<?=ASET;?>/plugins/simplebar/css/simplebar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	<link href="<?=ASET;?>/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="<?=ASET;?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?=ASET;?>/css/app.css" rel="stylesheet">
	<link href="<?=ASET;?>/css/icons.css" rel="stylesheet">

	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php include("aplikasi/views/bagian/bagian_samping_kiri.php");?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php include("aplikasi/views/bagain/bagian_atas.php");?>
		<!--end header -->
		<!--start page wrapper -->
		<!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="row">
                <form action="<?= APLIKASI; ?>/kirim/proses_input" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header bg-dark text-white">
                            <h1 align="left"><strong>INPUT PENGIRIMAN</strong></h1>
                        </div>
                        <div class="card-body bg-primary text-dark bg-opacity-25">
                            <input type="hidden" value="<?= $data["terimaid"]["id"]; ?>" name="idmasterpesanan">

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>NOMOR PENAWARAN</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" value="<?= $data["terimaid"]["nomor_penawaran"]; ?>">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>KODE/NAMA PELANGGAN</strong></label>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="<?= $data["terimaid"]["kode_pelanggan"]; ?>/<?= $data["terimaid"]["nama_pelanggan"]; ?>">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>ALAMAT</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" value="<?= $data["terimaid"]["alamat"]; ?>">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>TANGGAL PENAWARAN</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" value="<?= $data["terimaid"]["tgl_penawaran"]; ?>">
                                </div>

                                <label for="" class="col-4" style="color:black" align="right"> <strong>Tgl. TERIMA PESANAN</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" value="<?= $data["terimaid"]["tgl_pesanan"]; ?>">
                                </div>
                            </div>
                        </div>


                        </div>
                        <div class="card-body">
                            <table class="table table-bordered mt-4">
                                <thead class="table-dark"> text-center">
                                    <tr class="text-center">

                                        <th>

                                            <h5>Barang</h5>

                                        </th>

                                        <th>

                                            <h5>Harga Penawaran</h5>

                                        </th>

                                        <th>

                                            <h5>Kuantitas</h5>

                                        </th>

                                        <th>

                                            <h5>Harga</h5>

                                        </th>

                                        <th>

                                            <h5>Jumlah</h5>

                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($data['kirimid'] as $miw => $isi) : ?>
                                        <tr>
                                            <td scope="row"><?= $isi['kode_barang']; ?></td>

                                            <td>
                                                <? $isi['harga_estimasi']; ?>
                                            </td>

                                            <td>
                                                <? $isi['kuantitas']; ?>
                                            </td>

                                            <td>
                                                <? $isi['harga_barang']; ?>
                                            </td>

                                            <td>
                                                <? $isi['jumlah']; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <div class="row mt-4">
                                <label for="" class="col-2" style="color:black"> <strong>TANGGAL PENGIRIMAN</strong></label>
                                <div class="col-3">
                                    <input type="date" class="form-control" name="tglpengiriman">
                                </div>

                                <label for="" class="col-4" style="color:black" align="right"> <strong>EXPEDISI</strong></label>
                                <div class="col-3">
                                    <input type="text" class="form-control" name="exp">
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <a href="<?= APLIKASI; ?>/terima/index" button class="btn btn-outline-dark float-ed mt-3"> KEMBALI </button> </a>
                                        <table class="table table-bordered table-striped" border="10" width="75%">
                                        </table>
                                    </div>
                                    <div class="col-1" align="right">
                                        <button type="submit" class="btn btn-outline-dark mt-3 "> TAMBAH </button> </a>
                                        <table class="table table-bordered table-striped" border="10" width="75%">
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!--end breadcrumb-->



    </main>
    <!--end page main-->
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
		<!--End Back To Top Button-->
		<?php include("aplikasi/views/bagian/bagian_bawah.php");?>
	<!--end wrapper-->
	<!--start switcher-->
	<?php include("aplikasi/views/bagian/bagian_samping_kanan.php");?>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?=ASET;?>/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?=ASET;?>/js/jquery.min.js"></script>
	<script src="<?=ASET;?>/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?=ASET;?>/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?=ASET;?>/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="<?=ASET;?>/js/app.js"></script>


</body>

</html>

<div class="modal fade" id="inputnya_tawar" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="row">
                <div class="col">
                    <form action="">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#tombol-input").click9function(){
        $("#inputnya_tawar").modal("show")
    }

    // saat kode pelanggan di ganti
    $("#kdp").change(function(){
        // alert("ada masalah apaa? mampir yukkk")

        // deteksi value
        miww = $("kdp").val();
        // alert(miw)

        // perintah ajax untuk minta data

        $.ajax({
            url: "<?= APLIKASI; ?>/tawar/ask_data/" +miw,
            dataTypeL "json"
            success: function(miw) {
                // console.log(miw);
                $("#al").val(jay.pelanggan.alamat)
            }
        })
    })
</script>
                