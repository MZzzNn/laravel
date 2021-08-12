<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
            .shapeB{
                margin: 50px 180px 0px 180px;
                text-align: center
            }
            #btn{
                margin-bottom:20px ;
                background: green;
                border-color: green;
            }
            table td ,table{
                text-align: center,
            }
        </style>
    
    </head>
    <body>
        <div class="shapeB">
            <a class="btn btn-primary" id="btn" href="/posts/create">Create Post</a>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Posted By</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                @foreach ($posts as $post)
                <tr>
                    @foreach ($post as $item)
                        <td>{{$item}}</td>
                    @endforeach
                    <td>
                        <a class="btn btn-success" href="/posts/{{$post['id']}}">show</a>
                        <a class="btn btn-warning" href="/posts/{{$post['id']}}/edit">Edit</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
                </tr>  
                @endforeach
            </table>
        </div>
        

    </body>
</html>
