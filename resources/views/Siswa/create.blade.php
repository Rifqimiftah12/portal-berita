@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Siswa</b></center></div>
                    <form action="{{route("siswa.store")}}"method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">

                                <label>Masukan Nama Siswa</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nama" required>
                            </div>
                            <div class="col-md-4">
                                <label>Masukan Kelas</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="kelas" required>
                            </div>
                            <div class="col-md-4">

                                <label>Pilih Hobi</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control pilih-hobi" multiple name="hobi_id[]">
                                    @foreach ($hobi as $item)
                                        <option value="{{$item->id}}">{{$item->hobi}}</option>
                                    @endforeach
                                </select>
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
@push('script')
<script type="text/javascript">
    $(document).ready(function()
    {
        $('.pilih-hobi').select2();
    });
</script>

@endpush
