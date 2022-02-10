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
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <div class="d-flex mb-5 justify-content-between">
            <h2> All Posts </h2>
         <a href="{{route('category.create')}}"><button class="btn btn-primary btn-lg">Add New Post</button></a>
    </div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th style="width: 200px">Updated At</th>
                <th style="width: 150px">Action</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->updated_at->format('H:i d-m-Y')}}</td>
                    <td>
                    <a class="btn btn-warning btn-sm btn-lg " href="{{route('category.edit',$category->id)}}" >Update</a>
                    {{-- <a onclick="return confirm ('Are You Sure?')" class="btn btn-danger btn-sm btn-lg " href="{{route('category.destroy',$category->id)}}" >Delete</a> --}}
                  <form action="{{route('category.destroy',$category->id)}}" method="post">
                     @method("delete")
                    @csrf
                    <button onclick="return confirm ('Are You Sure?')" class="btn btn-danger btn-sm btn-lg ">Delete</button>
                     </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $categories->links() }}
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>

