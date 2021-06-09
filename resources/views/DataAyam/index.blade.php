@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><b> Data Ayam </b></h3>
                            <!-- Button trigger modal -->
							
							<div class="left">
                                <a href="{{ route('dataayamexport') }}" class="btn btn-primary btn-sm" >
                                    Download Data
                                </a>
                            </div>
                            <div class="right">
                                <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Data Ayam
                                </a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ayam</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <form action="/data_ayam/create" method="POST">
                                    {{csrf_field()}}
                                    
                                    <div class="mb-3">
                                        <label for="inputTanggal" class="form-label">Periode</label>
                                        <input name="periodeawal" type="date" class="form-control" id="inputperiodeawal" aria-describedby="periodeawalHelp">
                                        <input name="periodeakhir" type="date" class="form-control" id="inputperiodeakhir" aria-describedby="periodeakhirHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputJmlAwal" class="form-label">Jumlah Ayam Hidup</label>
                                        <input name="jmlawal" type="text" class="form-control" id="inputJmlAwal" aria-describedby="JmlAwalHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputJmlMati" class="form-label">Jumlah Ayam Mati</label>
                                        <input name="jmlmati" type="text" class="form-control" id="inputJmlMati" aria-describedby="JmlMatiHelps">
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
                <th>PERIODE AWAL</th>
				<th>PERIODE AKHIR</th>
                <th>JUMLAH AYAM HIDUP</th>
                <th>JUMLAH AYAM MATI</th>
                <th>TOTAL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        @foreach($data_ayam as $da)
        <tbody>
            <tr>
                <td>{{ $da->periodeawal }}</td>
				<td>{{ $da->periodeakhir }}</td>
                <td>{{ $da->jmlawal }}</td>
                <td>{{ $da->jmlmati }}</td>
                <td>{{ $da->total }}</td>
                <td>
                    <a href="/data_ayam/{{$da->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/data_ayam/{{$da->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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

@section('content1')
        <div class="row">
            <div class="col-12">
                <br>
                <h2 class="text-center">Data Ayam</h2>
                
            </div>
        </div>
        <br>  
            
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        
                    </tr>s
                </thead>
                
            </table>
    </div>

   
@endsection