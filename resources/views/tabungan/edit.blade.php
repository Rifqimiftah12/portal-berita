@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Edit Tabungan Siswa</b></center></div>

                    <form action="{{route('tabungan.update',$data->id)}}"method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label>Pilih Nama Siswa</label>
                            </div>
                            <div class="col-md-12">
                                <select name="siswa_id" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach ($siswa as $item)
                                        <option value="{{$item->id}}" {{$item->id == $data->siswa_id ? 'selected' : ''}}>
                                            {{$item->nama}} - {{$item->kelas}}></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Masukan Uang</label>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="number" name="jumlah_uang" value="{{$data->jumlah_uang}}" required>
                            </div>
                        </div>
                        <button class="btn btn-outline-danger" type="submit">Simpan</button>
                        <button class="btn btn-outline-success" type="reset">Reset</button>
                        <button class="btn btn-outline-dark" type="" href="{{route("tabungan.index")}}">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
