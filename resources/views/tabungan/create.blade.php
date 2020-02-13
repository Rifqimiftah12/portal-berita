@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Siswa</b></center></div>

                    <form action="{{route("tabungan.store")}}"method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Pilih Nama Siswa</label>
                            </div>
                            <div class="col-md-12">
                                <select name="siswa_id" class="form-control">
                                        <option value="">Pilih</option>
                                    @foreach ($data as $item)
                                        <option value="{{$item->id}}">{{$item->nama}} - {{$item->kelas}}></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Masukan Uang</label>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="number" name="jumlah_uang" required>
                            </div>
                        </div>
                        <button class="btn btn-outline-danger" type="submit">Simpan</button>
                        <button class="btn btn-outline-success" type="reset">Reset</button
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
