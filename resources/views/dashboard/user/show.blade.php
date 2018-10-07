<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
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
    <a href="./add/" class="btn btn-success" type="submit">create </a></td>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($users as $data)
      <tr>
        <td>{{$data['id']}}</td>
        <td>{{$data['full_name']}}</td>
        <td>{{$data['email']}}</td>
        <td>{{$data['phone_number']}}</td>
        <td><a href="./edit/{{$data['id']}}" class="btn btn-info" type="submit">update</a>
              <a href="./delete/{{$data['id']}}" class="btn btn-danger" type="submit">Delete</a></td>
            <input name="_method" type="hidden" value="DELETE">
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>