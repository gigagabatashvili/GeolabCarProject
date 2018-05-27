<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Subscriber</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-md-4"></div>
    	 <a href="/subscriber"><div class="btn btn-info">Go Subscriber</div> </a>
      <h2>Create A Service</h2>
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
      <form method="post" action="{{url('/subscriber')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">name:</label>
            <input type="text" class="form-control" placeholder="Enter name: " name="name">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="email">email:</label>
            <input type="text" class="form-control" placeholder="Enter Email: " name="email">
          </div>
        </div>



        </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Subscriber</button>
          </div>
        </div>

      </form>
    </div>
  </body>
</html>