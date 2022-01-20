<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        @include('CRUD.error.error')
        <h2> Update Posts </h2>
        <form action="{{route('change',$post->id)}}" method="post">
            @csrf
            @method('put')
            <div class="mb-4">
                <input type="text" name="title" placeholder="TiTle" class="form-control" value="{{$post->title}}">
            </div>

            <div class="mb-4">
                <textarea name="body"  rows="5" class="form-control" placeholder="Body">{{$post->content}}</textarea>
                </div>

            <button class="btn btn-success px-5 btn-lg">Submit</button>
        </form>
    </div>
  </body>
</html>
