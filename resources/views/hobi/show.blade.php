@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Show Jenis Hobi</b></center></div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! --}}
                        <div class="row">
                            <div class="col-md-4">

                                <label>Jenis Olahraga</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="hobi" value="{{$hobi->hobi}}" readonly>
                               <br> <a href="{{route("hobi.index")}}" class="btn btn-outline-dark float-right">
                                        Back
                                    </a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
