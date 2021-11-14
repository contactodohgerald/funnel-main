@php $pageTitle = 'Ecover Creator' @endphp
@extends('front.layouts.design')

@section('extra_css')   

@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        <h5 class="head-title">
            Page Editor
        </h5>
        <div class="edit-forms-wrap">
            <form action="{{ route('createEcover') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-4 offset-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                            <input type="hidden" type="text" value="flat_cover" name="type_value">
                        </div>
                        <div class="form-group">
                            <label for="with">Width</label>
                            <input type="text" class="form-control" value="1320" id="with" disabled>
                        </div>
                        <div class="form-group">
                            <label for="heigth">Heigth</label>
                            <input type="text" class="form-control" value="720" id="heigth" disabled>
                        </div>

                        <div class="form-group">
                            <label for="thumbnail">File</label>
                            <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Proceed</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@section('extra_js') 

<script> 

</script>

@endsection

@endsection