@extends('admin.layout.master')

@section('content')


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                            <strong>{{$pagename}}</strong>
                         </div>
                        <div class="card-body card-block">

                             @if($errors->any())
                                <div class="alert alert-danger">
                                    <div class="list-group">
                                        @foreach($errors->all() as $error)
                                            <li class="list-group-item">
                                             {{$error}}
                                            </li>
                                        @endforeach

                                    </div>
                                </div>
                            @endif

                        <form action="{{route('pesanan.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Telp</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtno_telp" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_pelanggan" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtalamat" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori Layanan</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="optionkategori_layanan" id="select" class="form-control">

                                        @foreach($data_kategori as $kategori)
                                        <option value={{$kategori->kategori_layanan}}>
                                        {{$kategori->waktu_proses}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterangan Pesanan</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtketerangan_pesanan" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Status Pesanan</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio1" name="radiostatus_pesanan" value="Proses" class="form-check-input">Masih Berjalan
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio2" name="radiostatus_pesanan" value="Selesai" class="form-check-input">Selesai
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </form>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->


@endsection
