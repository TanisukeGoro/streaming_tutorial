@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset-3 col-md-6">
        @if($path)
          <div class="alert alert-danger">
              <p>{{ $path }}</p>
          </div>
        @endif
        <div class="form-group">
          <form action="/video/create " method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlFile1">動画のアップロード</label>
              <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
  </div>
</div>
@endsection

