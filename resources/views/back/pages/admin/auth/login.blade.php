<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="row">
   <div class="container col-md-3 mt-4">
    <form action="{{route('admin.login_handler')}}" method="post">
        @csrf
        @if (Session::get('fail'))
        <div class="alert text-danger">
            {{Session::get('fail')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
          name="login_id" value="{{old('login_id')}}">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @error('login_id')
            <div class="d-blcok text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          @error('login_id')
          <div class="d-blcok text-danger">{{$message}}</div>
        @enderror
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>

</body>
</html>
