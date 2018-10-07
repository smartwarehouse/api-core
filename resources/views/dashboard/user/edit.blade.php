<h1>editono</h1>
<form action="{{$users['id']}}" method="post">
    <input type="text" name="full_name" value="{{$users['full_name']}}"> <br>
    <input type="text" name="email" value="{{$users['email']}}"> <br>
    <input type="text" name="phone_number" value="{{$users['phone_number']}}"> <br>
    <input type="submit" name="submit" value="edit">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
</form>