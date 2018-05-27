<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Contact</title>
  </head>
  <body>
    <div  class="container">
      <h1>Contact</h1>
              <ul class="list-group">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Cras justo odio</li>
              </ul>

     <div class="row">
       <div class="col-md-6">



       <form  method="post" action="{{url('/contact')}}" enctype="multipart/form-data">
           <div class="form-group">
            <label>Name: </label>
            <input type="text" class="form-control" name="name">
           </div>

            <div class="form-group">
            <label>Email: </label>
            <input type="text" class="form-control" name="email">
           </div>

            <div class="form-group">
            <label>subject: </label>
            <input type="text" class="form-control" name="subject">
           </div>
            <div class="form-group">
            <label>text: </label>
            <input type="text" class="form-control" name="text">
           </div>

           <div class="form-group">
            <label>gender: </label>
            <input type="text" class="form-control" name="gender">
           </div>
            <div class="form-group">
            <label>newsletter: </label>
            <input type="text" class="form-control" name="newsletter">
           </div>

           <button type="submit" class="btn btn-info" >Submit</button>
       </form>
     </div>
     </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
