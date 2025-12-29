<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes Memo</title>
    <style>
        body {
            margin: 30px
        }

        form {
            margin-bottom: 30px;
        }

        .note-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
        }

        .yellow {
            background-color: #ffffcc;
        }

        .blue {
            background-color: #cce5ff;
        }
    </style>
</head>

<body>


    <form action="{{route('notes.store')}}" method="POST">
        @csrf
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea><br>

        <label for="color">Color:</label>
        <select name="color" id="color" required>
            <option value="yellow">Yellow</option>
            <option value="blue">Blue</option>
        </select><br>


        <button type="submit">Add Note</button>
    </form>


    @if(session('success'))
    <p style="color:green">{{session('success')}}</p>
    @endif


    @if($errors->any())
    <ul style="color:red">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>

        @endforeach
    </ul>
    @endif

    @foreach($notes as $note)
    <div class="note-card {{ $note->color }}">
        <p>{{$note -> content}}</p>
        <form action="{{route('notes.destroy', $note)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Note</button>
        </form>
    </div>
    @endforeach



</body>

</html>