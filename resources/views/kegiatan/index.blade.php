<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 17/02/19
 * Time: 08.18
 */
?>
@extends('layouts.main')
@section('main')
    @include('layouts.success')
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Data Kegiatan</h5>
                <p class="mb-40">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data
                    </button>
                </p>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Acara</th>
                                    <th>Waktu</th>
                                    <th>Tempat</th>
                                    <th>Penyelenggara</th>
                                    <th>Pengisi</th>
                                    <th>Keterangan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; ?>
                                @foreach($kegiatan as $kegiatans)
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $kegiatans->kegNamaAcara ?></td>
                                        <td><?= $kegiatans->kegWaktu ?></td>
                                        <td><?= $kegiatans->kegTempat ?></td>
                                        <td><?= $kegiatans->kegPenyelenggara ?></td>
                                        <td><?= $kegiatans->kegPengisi ?></td>
                                        <td><?= $kegiatans->kegKeterangan ?></td>
                                    </tr>
                                    <?php $no++; ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Nama Acara</label>
                        <input type="text" class="form-control rounded-input mt-15" placeholder="Nama Acara">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Acara</label>
                        <input class="form-control" type="text" name="birthday" value="10/24/1984"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>