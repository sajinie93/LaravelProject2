<html>
<head>
    <title>All Students</title>
</head>
<body>
<div>
    <h1>All Students</h1>
    <h3>Application created by {{ $name }}</h3>
    <ul>
        @foreach($students as $current_student)
            <li>{{ $current_student->name }}</li>
        @endforeach
    </ul>

    <div>
    @if($errors->has('age'))
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
    </div>
    <form action="{{ route('add_student_route') }}" method="POST">
        {{ csrf_field() }}
        <label for="student_name">Name: </label>
        <input type="text" name="student_name">
        <br>
        <label for="age">Age: </label>
        <input type="text" name="age">

        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>
</body>
</html>