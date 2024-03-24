@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Mahasiswa</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Muhammad Nayaka Putra</td>
                <td>221402001</td>
                <td>Teknologi Informasi</td>
                <td>Ilmu Komputer dan Teknologi Informasi</td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection