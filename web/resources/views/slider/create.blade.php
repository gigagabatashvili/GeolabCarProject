<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Slider</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
  	<section>
    <div class="container">
      <div class="row">
      <div class="col-md-4"></div>
    	 <a href="/admin/slider"><div class="btn btn-info">Go Slider</div> </a>
      <h2>Create  Slider</h2><br  />
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
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
      <form method="post" action="{{url('/admin/slider')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title">
          </div>
        </div>

        <div class="row">
           <div class="col-md-4"></div><br><br>
           <input type="file" name="slider_image">
        </div>
        </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Slider</button>
          </div>
        </div>

      </form>
    </div>
</section>
  </body>
</html>