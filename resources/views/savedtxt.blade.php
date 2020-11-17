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
            #cards {
                display: flex;
                flex-direction: row;
                column-gap: 20px;
            }
            input {
                width: 40%;
                height: 40%:
            }
        </style>
        <script>
        function layout() {
            document.getElementById('cards').style.display = "block";
        }
        </script>
    </head>
    <body>

    <h1>Text Editor</h1>
                
            <ul class="nav nav-pills nav-tabs">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="/">New note</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Saved note</a></li>
            </ul>
            <br>
            <div class="container">
                <div class="custom-control custom-switch" >
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" onclick="layout()" style="align-items:right;">
                    <label class="custom-control-label" for="customSwitch1" style="font-size:20px;">List view</label>
                </div>
            </div>
            <br>
            <div class="container" id="cards">
                @foreach($txts as $txt)
                <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header">{{ $txt->created_at }}</div>
                    <div class="card-body">
                        <p class="card-text">{{ $txt->textcontent }}</p>
                    </div>
                    <form class="card-footer text-center" action="/saved" method="POST">
                        @csrf 
                        <textarea hidden name="ID">{{ $txt->id }}</textarea>
                        <button class="btn btn-warning text-white" type="submit" name="delete" style="letter-spacing: 2px;"><b>Delete</b></button>
                        <button class="btn btn-warning text-white" type="submit" name="update" style="letter-spacing: 2px;"><b>Update</b></button>
                    </form>
                </div>
                @endforeach
            </div>
    </body>
</html>