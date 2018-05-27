
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Service Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
     <a href="/admin/service/create"><div class="btn btn-info">Create Service</div> </a>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>title</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($services as $service)
      <tr>
        <td>{{$service['id']}}</td>
        <td><img class="img-thumbnail" src="/storage/cover/{{$service->cover_image}}"></td>
        <td>{{$service['title']}}</td>
        <td><a href="{{action('ServiceController@edit', $service['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ServiceController@destroy', $service['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>