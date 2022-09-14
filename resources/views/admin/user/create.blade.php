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

                                <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama User</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_user" placeholder="Text" class="form-control"><small class="form-text text-muted">Isi Nama user Anda</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email User</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtemail_user" placeholder="Text" class="form-control"><small class="form-text text-muted">Isi  email anda</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="text-input" name="txtpassword_user" placeholder="Text" class="form-control"><small class="form-text text-muted">Isi password anda</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Konfirmasi Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="text-input" name="txtkonfirmasiPassword_user" placeholder="Text" class="form-control"><small class="form-text text-muted">Konfirmasi password anda</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Role</label></div>
                                            <div class="col-12 col-md-9">
                                            <select name="role_user" id="select" class="form-control">
                                            @foreach($allRoles as $role)

                                            <option value={{$role->id}}>
                                                {{$role -> name}}
                                            </option>

                                            @endforeach

                                            </select>
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
                        </div>
                    </div>
                </div><!-- .Animated -->
            </div><!-- .content -->


@endsection
