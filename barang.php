<?php

class barang extends controller
{
    public function index()
    {
        $jimm['barang'] = $this->gunakan_model("m_barang")->semua_barang();
        $this->tampilkan_view("f_barang/v_daftar_barang_120", $jimm);
    }


    public function input()
    {
        $this->tampilkan_view("f_barang/v_input_barang_120");
    }

    public function tampil($ciaw)
    {
        $jimm['barang'] = $this->gunakan_model("m_barang")->satu_barang($ciaw);
        $this->tampilkan_view("f_barang/v_tampil_barang_120", $jimm);
    }

    public function edit($ciaw)
    {
        $jimm['barang'] = $this->gunakan_model("m_barang")->satu_barang($ciaw);
        $this->tampilkan_view("f_barang/v_edit_barang_120", $jimm);
    }

    public function hapus($ciaw)
    {
        $jimm['barang'] = $this->gunakan_model("m_barang")->satu_barang($ciaw);
        $this->tampilkan_view("f_barang/v_hapus_barang_120", $jimm);
    }

    // buat metode baru
    public function proses_input()
    {
        // cetak_var($_POST);
        
        // jika di $_POST ada index kosong
        // memeriksa isi di $_POST
        if ($_POST ['kode_barang'] =="") {
            // mengalihkan ke halaman eror
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['nama_barang'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['satuan'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['harga_estimasi'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['merek'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['sheet'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        // periksa key
        // jika data yang dicari di $_POST ada dalam tabel maka nilai $jimm adalah not false dan sebaliknya
        $jimm = $this->gunakan_model("m_barang")->select_data_kode_barang($_POST['kode_barang']);
        if ($jimm !=false) {
            header("location:" . APLIKASI . "/eror/indec");
            die;
        }

        // menyerahkan data ke model
        $this->gunakan_model("m_barang")->save($_POST);
        header("location:" . APLIKASI . "/barang");
    }

    public function proses_edit()
    {
        $jimm= $this->gunakan_model("m_barang")->edit($_POST);
        // cetak_var($jimm);

        header("location:" . APLIKASI . "/barang");
    }

    public function proses_delete()
    {
        $yuno = $this->gunakan_model("m_barang")->delete($_POST);
        // ceta k_var($jimm);

        header("location:" . APLIKASI . "/barang");
    }

    public function track_data($ciaw)
    {
        $jimm = $this->gunakan_model("m_barang")->select_data_kode_barang($ciaw);
        echo json_encode($jimm);
    }
}
