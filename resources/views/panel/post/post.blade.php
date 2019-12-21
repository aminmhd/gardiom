@extends('panel.index')


@section('content')


    <div class="card card-primary" style="margin: 30px">
        <div class="card-header">
            <h3 class="card-title">POST</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tittle</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Tittle"
                           name="tittle" value="{{ old('tittle' , isset($edit_form) ? $edit_form->post_tittle : '') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Explain</label>
                    <textarea id="exampleInputEmail1" class="form-control" name="explain" placeholder="Enter content"
                              rows="4">{{ old('explain' , isset($edit_form) ? $edit_form->post_content : '') }}</textarea>
                </div>
                <div class="file-field input-field">
                    <label
                        for="exampleInputFile">{{ old('fileItem' , isset($edit_form) ? $edit_form->post_img.' : ' : 'Choose File to Upload : ') }}</label>
                    <input type="file" name="fileItem" class="form-group" id="exampleInputFile">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="margin-top: -20px">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

@endsection
