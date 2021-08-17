@extends('master')

@section('title')
    Detail
@endsection

@section('one')
<li class="breadcrumb-item">
    <a href="/blog">  Index </a>
</li>
@endsection

@section('two')
<li class="breadcrumb-item">
    <a href="#">  Detail </a>
</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow rounded"><br>
                <fieldset disabled class="m-3">
                    <div class="form-group">
                        <label for="disabledTextInput"><strong> Title :</strong></label>
                        <input type="text" id="disabledTextInput" class="form-control" value="{{$blog->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content :</label>
                        <textarea disabled class="form-control" name="content" rows="3" placeholder="Masukkan Konten Blog">{{ old('content', $blog->content) }}</textarea>
                    </div>
                </fieldset disabled>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
    
@endsection