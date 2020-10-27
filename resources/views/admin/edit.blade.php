@extends('admin.layouts.master')
@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="col-sm-12 col-md-6">
    <h6 class="m-0 font-weight-bold text-primary">EDIT Data ART</h6>
    </div>
  </div>
  <div class="card-body" style="font-size: 15px;">
      <div class="table-responsive">
<form action="/art/{{$art->id}}/update" method="POST" >
        	{{csrf_field()}}
  <div class="form-group">
    <label >Foto</label>
    <input name="foto" type="file" class="form-control" id="foto" >
    <i value="">{{$art->getPhoto()}}</i>
  </div>
  <div class="form-group">
    <label >Nama</label>
    <input name="nama" type="text" class="form-control" id="nama" value="{{$art->nama}}">
  </div>
  <div class="form-group">
          <label >No Hp</label>
          <input name="nohp" type="text" class="form-control" id="nohp" value="{{$art->nohp}}">
        </div>
        <div class="form-group">
          <label >Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="{{$art->tanggallahir}}">
        </div>
        <div class="form-group">
          <label >Kecamatan</label>
          <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{$art->kecamatan}}">
        </div>
        <div class="form-group">
          <label >Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="{{$art->alamat}}">
        </div>
        <div class="form-group">
          <label >kode Pos</label>
          <input type="text" class="form-control" id="kodepos" name="kodepos" value="{{$art->kodepos}}">
        </div>
        <div class="form-group">
          <label >status</label>
        <select class="form-control" id="status" name="status">
        <option value="Available" @if($art->status == 'Availabe') selected @endif>Availabe</option>
        <option value="Hired" @if($art->status == 'Hired') selected @endif>Hired</option>
        </select>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" >{{$art->deskripsi}}</textarea>
        </div>
        <!-- div class="form-group">
          <label >username</label>
          <input type="text" class="form-control" id="username" name="username" value="{{$art->username}}">
        </div>
        <div class="form-group">
          <label >password</label>
          <input type="text" class="form-control" id="password" name="password" value="{{$art->password}}">
        </div>
        <div class="col text-center"> -->
  <button type="submit" class="btn btn-primary">update</button>
  </div>
      </form>
      </div>
      </div>
      
@endsection

