@extends('master-admin')
@section('content')
    <div class="col-12">
        <div class="card">
            <h1 style="color: red" class="card-header">EDIT PRODUCT</h1>
            <div class="card-body">
                <form action=""  method="post" data-parsley-validate="">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <label for="id_type">Type ID</label>
                        <input id="id_type" type="text" name="id_type" data-parsley-trigger="change" required="" class="form-control" value="{!! old('id_type',isset($edit_product ) ? $edit_product ['id_type'] : null)!!}">
                    </div>
                    <div class="form-group">
                        <label for="ten"> Tên </label>
                        <input id="ten" type="text" name="ten" data-parsley-trigger="change" required="" class="form-control" value="{!! old('ten',isset($edit_product ) ? $edit_product ['ten'] : null) !!}">
                    </div>
                    <div class="form-group">
                        <label for="gia"> Giá </label>
                        <input id="gia" type="text" name="gia" data-parsley-trigger="change" required="" class="form-control" value="{!! old('gia',isset($edit_product ) ? $edit_product ['gia'] : null) !!}">
                    </div>
                    <div class="form-group">
                        <label for="moTa"> Mô tả </label>
                        <input id="moTa" type="text" name="moTa" data-parsley-trigger="change" required="" class="form-control" value="{!! old('moTa',isset($edit_product ) ? $edit_product ['moTa'] : null) !!}">
                    </div>
                    <div class="form-group">
                        <label for="linkAnh"> Tải ảnh mới lên </label>
                        <input id="anh" type="file" name="anh" data-parsley-trigger="change" required="" class="form-control" value="{!! old('linkAnh',isset($edit_product ) ? $edit_product ['linkAnh'] : null) !!}">
                        {{--<input id="linkAnh" type="text" name="linkAnh" data-parsley-trigger="change" required="" class="form-control" value="{!! old('linkAnh',isset($edit_product ) ? $edit_product ['linkAnh'] : null) !!}">--}}
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-right">
                                <button style="border-radius: 200px; width: 200px" type="submit" class="btn btn-space btn-primary">Update</button>
                            </p>
                        </div>

                </form>
                <div style="float: right;" class="col-6">
                    <button style="border-radius: 200px" type="button" onclick="reload()" class="btn btn-space btn-secondary">Cancel</button>
                    <script>
                        function reload(){
                            location.reload();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
