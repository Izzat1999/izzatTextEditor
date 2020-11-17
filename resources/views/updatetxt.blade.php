<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Text Editor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
            .btn {
                border: solid 2px black;
                color: black;
            }
            h1 {
                font-size: 80px;
            }
            .textarea {
                border: solid 5px black;
			    padding: 5px;
			    min-height:200px;
                min-width:1000px;
            }
        </style>
    </head>
    <body>
        <h1>Text Editor</h1>
                
            <ul class="nav nav-pills nav-tabs">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="/">New note</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Saved note</a></li>
            </ul>
            <br>
            <div class="container">
                <form action="/saved/{{ $txt->id }}" method="POST">
                    @csrf
                    <textarea hidden name="ID">{{ $txt->id }}</textarea>
                    <textarea class="textarea" name="textcontent" contenteditable="true">{{ $txt->textcontent }}</textarea><br>
                <button type="submit" class="btn btn-warning">Save</button>
                </form>
            </div>
    </body>
</html>    