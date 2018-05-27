
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>social Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>photo</th>
        <th>name</th>
        <th>link</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>


      @foreach($socials as $social)
      <tr>
        <td>{{$social['id']}}</td>
        <td><a href="{{$social->link}}"><img class="img-responsive soc-icon" src="/storage/social/{{$social->icon}}"></a></td>
        <td>{{$social['name']}}</td>
        <td><a href="{{$social['link']}}">{{$social['link']}}</td>
        <td><a href="{{action('SocialController@edit', $social['id'])}}" class="btn btn-warning">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>