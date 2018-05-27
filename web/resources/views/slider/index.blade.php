
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Slider Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
     <a href="/admin/slider/create"><div class="btn btn-info">Create Slider</div> </a>
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
        <th colspan="2">title</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sliders as $slider)
      <tr>
        <td>{{$slider['id']}}</td>
        <td><img class="img-thumbnail" src="/storage/slider/{{$slider->slider_image}}"></td>
        <td>{{$slider['title']}}</td>
        <td><a href="{{action('SliderController@edit', $slider['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('SliderController@destroy', $slider['id'])}}" method="post">
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