<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-md-4"></div>
         <a href="/"><div class="btn btn-info">Go Back</div> </a>
      <h2>Add Contact</h2>
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
      <form method="post" action="{{url('/contact')}}" enctype="multipart/form-data">
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
            <input type="text" class="form-control" placeholder="Enter email: " name="email">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="subject">subject:</label>
            <input type="text" class="form-control" placeholder="Enter subject: " name="subject">
          </div>
        </div>
       <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="text">text:</label>
            <input type="text" class="form-control" placeholder="Enter text: " name="text">
          </div>
        </div>
 <!--     <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="gender">gender:</label>
            <input type="text" class="form-control" placeholder="Enter gender: " name="gender">
          </div>
        </div> 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="newsletter">newsletter:</label>
            <input type="text" class="form-control" placeholder="Enter newsletter: " name="newsletter">
          </div>
        </div> -->


        <label >Male
            <input type="radio" name="gender" value="male" checked>
           
        </label>
        <label >Famale
            <input type="radio" name="gender" value="female">
            
        </label>

    <h1 class="costom">Sign up for newsletter:</h1>
    <label ><p>recive images</p>
        <input type="checkbox" name="newsletter" value="recive images">
    </label>
    <label ><p>recive promotions</p>
        <input type="checkbox" name="newsletter" value="recive promotions">
    </label>
    <label  ><p>recive updates</p>
        <input type="checkbox" name="newsletter" value="recive updates">
    </label>
    <label  ><p>recive job offers</p>
        <input type="checkbox" name="newsletter" value="recive job offers">
    </label>



        </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Contact</button>
          </div>
        </div>

      </form>
    </div>
  </body>
</html>