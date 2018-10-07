<h1>editono</h1>
<form action="" method="post">
    <input type="text" name="full_name"> <br>
    <input type="text" name="email"> <br>
    <input type="text" name="phone_number"> <br>
    <input type="text" name="password"> <br>
    <input type="text" name="role"> <br>
    <input type="submit" name="submit" value="Create">
    {{csrf_field()}}
</form>