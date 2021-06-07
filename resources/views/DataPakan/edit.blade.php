@extends('layouts.master')

@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Stok Pakan</h3>
								</div>
								<div class="panel-body">
                                    <form action="/data_pakan/{{$data_pakan->id}}/update" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
										<div class="mb-3">
											<label for="inputgambar" class="form-label">Gambar</label>
											<input name="gambar" type="file" class="form-control" id="inputgambar" aria-describedby="gambarHelp" value="{{$data_pakan->gambar}}">
										</div>
                                        <div class="mb-3">
                                            <label for="inputTanggal" class="form-label">Merek Pakan</label>
                                            <input name="namapakan" type="text" class="form-control" id="inputTanggal" aria-describedby="tanggalHelp" value="{{$data_pakan->namapakan}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputStok" class="form-label">Stok</label>
                                            <input name="stok" type="text" class="form-control" id="inputStok" aria-describedby="stokHelp" value="{{$data_pakan->stok}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputTerpakai" class="form-label">Berat</label>
                                            <input name="berat" type="text" class="form-control" id="inputTerpakai" aria-describedby="terpakaiHelp" value="{{$data_pakan->berat}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputSisa" class="form-label">Expired</label>
                                            <input name="expired" type="date" class="form-control" id="inputSisa" aria-describedby="sisaHelp" value="{{$data_pakan->expired}}">
                                        </div>
										<div class="mb-3">
                                            <label for="inputTerpakai" class="form-label">Biaya</label>
                                            <input name="biaya" type="text" class="form-control" id="inputTerpakai" aria-describedby="terpakaiHelp" value="{{$data_pakan->biaya}}">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </form>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection