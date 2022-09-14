@extends('admin.layout.master')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<script>
        $(document).ready(function(){
            $(".mul-select").select2({
                placeholder: "Pilih permission ...",
                tags: true,
                tokenSeparators: ['/',',',';',' '],
                width: "100%"
            });
        });
    </script>
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

                        <form action="{{route('roles.update',$role->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @method('PATCH')
                        @csrf

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Role</label></div>
                                <div class="col-12 col-md-9"><input type="text" value="{{$role->name}}" id="text-input" name="txtnama_role" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Permission</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="optionid_permission[]" id="select" class="mul-select" multiple="true">
                                    @foreach($allPermission as $permission)
                                        <option value={{$permission->id}}
                                            @if (in_array($permission->id,$rolePermission))
                                                selected
                                            @endif
                                            >
                                            {{$permission->name}}
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
                </div><!-- .animated -->
            </div><!-- .content -->



@endsection
