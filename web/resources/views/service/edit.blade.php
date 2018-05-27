<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit  Service</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-md-4"> </div>
      <a href="/admin/service"><div class="btn btn-info">Go Service</div> </a>
      <h2>Edit Service</h2><br  />
      </div><br><br>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      <form method="post" action="{{action('ServiceController@update', $id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$service->title}}">
          </div>
        </div>
            <div class="row">
              <div class="col-md-4"></div><br><br>
              <input type="file" name="cover_image">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update Service</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>