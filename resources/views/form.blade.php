<!DOCTYPE html>
<html>
<head>
    <title>Laravel Form</title>
</head>
<body>
    <h2>Call Form</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/form">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <button type="submit">Send</button>
    </form>
</body>
</html>
