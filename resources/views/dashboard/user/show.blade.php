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
    <button class="btn btn-success" type="submit">create </button>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($users as $user)
      <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['full_name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['phone_number']}}</td>
          <td><button class="btn btn-info" type="submit">update</button>
              <a href="./delete/{{$user['id']}}" class="btn btn-danger" type="submit">Delete</a></td>
            <input name="_method" type="hidden" value="DELETE">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>