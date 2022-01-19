<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> --}}
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <div class="d-flex mb-5 justify-content-between">
            <h2> All Posts </h2>
         <a href="{{route('add')}}"><button class="btn btn-primary btn-lg">Add New Post</button></a>
    </div>
        {{-- @if (session('success'))
            @if (session('type'))
                    <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            {{-- @endif --}}


        <table class="table">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th style="width: 200px">Created At</th>
                <th style="width: 150px">Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                    <a class="btn btn-primary btn-sm btn-lg " href="#" >Update</a>
                    <a onclick="return confirm ('Are You Sure?')" class="btn btn-danger btn-sm btn-lg " href="{{route('delete',$post->id)}}" >Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $posts->links() }}
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
