<html>
<head>

</head>
<body>
<h1> subject</h1>
<p>
    {{$title}}

</p>

<form action="{{route('add_subject')}}" method="POST">
    {{csrf_field()}}
    <label for="title">title</label>
    <input type="text" name="title">
    <br>
    <label for="marks">marks</label>
    <input type="text" name="marks">

    <input type='submit' value="submit">

</form>
</body>

</html>