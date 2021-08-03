<?php

    class Karyawan extends Controller
    {
        public function __construct()
        {
          $this->karyawanModel = $this->model('pengguna_model');
        }

        public function index()
        {
            $karyawanList = $this->karyawanModel->getPenggunaList();
            $data = [
                'karyawan_list' => $karyawanList
            ];
            $this->view('karyawan/index', $data);
        }

        public function create()
        {
            $this->view('karyawan/form');
        }

        public function store()
        {
            $data = [
                'nip' => $_POST['nip'],
                'nama' => $_POST['nama'],
                'alamat' => $_POST['alamat'],
                'kontak' => $_POST['kontak'],
                'jabatan' => $_POST['jabatan'],
                'username' => $_POST['username'],
                'password' => md5($_POST['password']),
            ];

            if ($this->karyawanModel->storePengguna($data)) {
                flash('success', 'Karyawan berhasil terdaftar!');
                redirect('karyawan');
            } else {
                flash('error', 'Karyawan gagal terdaftar!');
                redirect('karyawan/create');
            }
        }

        public function show($id)
        {
            $karyawan = $this->karyawanModel->getPenggunaByNIP($id);
            $data = [
                'karyawan' => $karyawan
            ];
            $this->view('karyawan/show', $data);
        }

        public function edit($id)
        {
            $karyawan = $this->karyawanModel->getPenggunaByNIP($id);
            $data = [
                'karyawan' => $karyawan
            ];
            $this->view('karyawan/form', $data);
        }

        public function update($nip)
        {
            if (!isset($_POST['password'])) {
                $data = [
                    'nama' => $_POST['nama'],
                    'alamat' => $_POST['alamat'],
                    'kontak' => $_POST['kontak'],
                    'jabatan' => $_POST['jabatan'],
                    'username' => $_POST['username'],
                    'password' => md5($_POST['password']),
                ];
            } else {
                $data = [
                    'nama' => $_POST['nama'],
                    'alamat' => $_POST['alamat'],
                    'kontak' => $_POST['kontak'],
                    'jabatan' => $_POST['jabatan'],
                    'username' => $_POST['username'],
                ];
            }
            if ($this->karyawanModel->updatePengguna($data)) {
                flash('success', 'Data Karyawan berhasil diubah!');
                redirect('karyawan');
            } else {
                flash('error', 'Data Karyawan gagal diubah!');
                redirect('karyawan/update/'.$nip);
            }
        }

        public function destroy($id)
        {
            $karyawan = $this->karyawanModel->getPenggunaByNIP($id);

            //Check for ownership
            if ($_SESSION['user_jabatan'] != $karyawan->jabatan){
                if ($this->karyawanModel->destroyPengguna($id) ){
                    flash('success', 'Data Karyawan berhasil dihapuskan!');
                    redirect('karyawan');
                } else {
                    flash('error', 'Data Karyawan gagal dihapuskan!');
                    redirect('karyawan');
                }
            } else {
                die('Something went wrong');
            }
        }

    }