@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Show Tabungan Siswa</b></center></div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama Siswa</label>
                            </div>
                            <div class="col-md-12">
                            <input type="text" class="form-control" value="{{$tabungan->siswa->nama}}">
                            </div>
                            <div class="col-md-4">
                                <label>Kelas Siswa</label>
                            </div>
                            <div class="col-md-12">
                            <input type="text" class="form-control" value="{{$tabungan->siswa->kelas}}">
                            </div>
                            <div class="col-md-4">
                                <label>Jumlah Uang</label>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="number" name="jumlah_uang" value="{{$tabungan->jumlah_uang}}" readonly>
                                <br><a href="{{route("tabungan.index")}}" class="btn btn-outline-dark float-right">
                                    Back
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
