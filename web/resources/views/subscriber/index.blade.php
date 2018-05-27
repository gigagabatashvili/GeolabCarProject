
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Subscriber Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
     <a href="/subscriber/create"><div class="btn btn-info">Create subscriber</div> </a>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
        <th>Create Time</th>

      </tr>
    </thead>
    <tbody>
      @foreach($subscribers as $subscriber)
      <tr>
        <td>{{$subscriber['id']}}</td>
        <td>{{$subscriber['name']}}</td>
        <td>{{$subscriber['email']}}</td>
        <td>{{$subscriber['created_at']}}</td>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>