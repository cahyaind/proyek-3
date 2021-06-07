@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><b> Data Stok Pakan </b></h3>
                            <!-- Button trigger modal -->
                            <div class="right">
                                <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Data Stok Pakan
                                </a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Stok Pakan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <form action="/data_pakan/create" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    
                                    <div class="mb-3">
                                        <label for="inputgambar" class="form-label">Gambar</label>
                                        <input name="gambar" type="file" class="form-control" id="inputgambar" aria-describedby="gambarHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputnamapakan" class="form-label">Nama Pakan</label>
                                        <input name="namapakan" type="text" class="form-control" id="inputnamapakan" aria-describedby="ayamHidupHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputstok" class="form-label">Stok</label>
                                        <input name="stok" type="text" class="form-control" id="inputstok" aria-describedby="ayamMatiHelps">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputberat" class="form-label">Berat</label>
                                        <input name="berat" type="text" class="form-control" id="inputberat" aria-describedby="totalHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputexpired" class="form-label">Expired</label>
                                        <input name="expired" type="date" class="form-control" id="inputexpired" aria-describedby="totalHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputbiaya" class="form-label">Biaya</label>
                                        <input name="biaya" type="text" class="form-control" id="inputbiaya" aria-describedby="totalHelp">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    <button type="submit" class="btn"><i class="lnr lnr-plus-circle"></i>Simpan</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <!-- Akhir Modal -->
                            </div>
								</div>
								<div class="panel-body">
                                    @if(session('pesan'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('pesan')}}
                                    </div> 
                                    @endif 
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>GAMBAR</th>
                                                <th>MEREK PAKAN</th>
                                                <th>STOK</th>
                                                <th>BERAT</th>
                                                <th>EXPIRED</th>
                                                <th>BIAYA</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        @foreach($data_pakan as $dp)
                                        <tbody>
                                            <tr>
                                                <td><a href="{{ asset('img/'. $dp->gambar) }}" target="_blank" rel="noopener noreferrer"> Lihat Gambar</a></td>
                                                <td>{{ $dp->namapakan }}</td>
                                                <td>{{ $dp->stok }}</td>
                                                <td>{{ $dp->berat }}</td>
                                                <td>{{ $dp->expired }}</td>
                                                <td>{{ $dp->biaya }}</td>
                                                <td>
                                                    <a href="/data_pakan/{{$dp->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/data_pakan/{{$dp->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>    
                                        @endforeach
									</table>
								</div>
							</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop