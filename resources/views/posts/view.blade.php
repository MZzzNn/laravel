<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
            .shapeB{
                margin: 50px 180px 0px 180px;
            }
        </style>
    
    </head>
    <body>
        <div class="shapeB">
          <h1 style="text-align: center">{{$id}}</h1>
            <div class="card">
                <div class="card-header">Post info </div>
                <div class="card-body">
                  <p><b>Title :- </b> Special title treatment</p>
                  <b>Description :- </b> <br>
                  <p>With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </div>    
              <br> <br>
              <div class="card">
                <div class="card-header">Post Crator info </div>
                <div class="card-body">
                  <p><b>Name :- </b>Ahmed</p>
                  <p><b>E-mail :- </b>Ahmed@mail.com</p>
                  <p><b>Created At :- </b>Thursday 25th of December 1975 02:15:16 pm</p>
                  <br>
                  <b style="color: red">(Search in carbon documention to know how to format it like this) in lab 2</b>

                </div>
              </div>  
        </div>        
    </body>
</html>
