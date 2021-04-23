@extends('template')

@section('content')

<div class="container">
  <br>
  <h2>Add Mata Kuliah</h2>
  <br>

    <form action="{{ route('ujian.save') }}" method="post">

        @csrf

        <div class="form-group">
            <label>Mata Kuliah</label>
            <input type="text" name="nama_mk" class="form-control">
        </div>
        <br>

        <div class="form-group">
            <label>Dosen</label>
            <input type="text" name="dosen" class="form-control">
        </div>
        <br>


        <div class="form-group">
            <label>jumlah Soal</label>
            <input type="number" name="jumlah_soal" class="form-control">
        </div>
        <br>

        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
        </div>
        <br>

        <input type="submit" name="submit" value="Save Data" class="btn btn-primary">
        <a class="btn btn-secondary" href="{{ route('ujian.index') }}">Cancel</a>

    </form>



  </div>


@endsection