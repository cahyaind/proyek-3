@extends('layouts.master')

@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Ayam</h3>
								</div>
								<div class="panel-body">
                                    <form action="/data_ayam/{{$data_ayam->id}}/update" method="POST">
                                    {{csrf_field()}}
                                        <div class="mb-3">
                                            <label for="inputTanggal" class="form-label">Periode Awal</label>
                                            <input name="periodeawal" type="date" class="form-control" id="inputTanggal" aria-describedby="emailHelp" value="{{$data_ayam->periodeawal}}">
                                        </div>
										<div class="mb-3">
                                            <label for="inputTanggal" class="form-label">Periode Akhir</label>
                                            <input name="periodeakhir" type="date" class="form-control" id="inputTanggal" aria-describedby="emailHelp" value="{{$data_ayam->periodeakhir}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputAyamHidup" class="form-label">Ayam Hidup</label>
                                            <input name="jmlawal" type="text" class="form-control" id="inputAyamHidup" aria-describedby="emailHelp" value="{{$data_ayam->jmlawal}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputAyamMati" class="form-label">Ayam Mati</label>
                                            <input name="jmlmati" type="text" class="form-control" id="inputAyamMati" aria-describedby="emailHelp" value="{{$data_ayam->jmlmati}}">
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