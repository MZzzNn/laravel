<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <style>
            .shapeB{
                margin: 50px 180px 0px 180px;
            }
            #btn{
                background: green;
                border-color: green;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <form action="/posts" method="post">
            {{ csrf_field() }}   
            <div class="shapeB">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" >
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Post Creator</label>
                    <input type="text" class="form-control" name="poCreator">
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="btn">Create</button>
                  </div>
            </div>
        </form>
    </body>
</html>
