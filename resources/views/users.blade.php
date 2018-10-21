<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <h1>
              Busqueda de usuarios
              {{ Form::open(['route'=>'users','method'=>'GET','class'=>'form-inline pull-right'])}}
                <div class="form-group">
                  {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])}}
                </div>
                <div class="form-group">
                  {{Form::text('email',null,['class'=>'form-control','placeholder'=>'email'])}}
                </div>
                <div class="form-group">
                  {{Form::text('bio',null,['class'=>'form-control','placeholder'=>'bio'])}}
                </div>

                <div class="form-group">
                  <button type="submit" name="button" class="btn btn-default">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              {{Form::close()}}
            </h1>
          </div>
        </div>

        <div class="col-md-8">
          <table class="table table-hover table-striped">
            <tbody>
              @foreach($users as $user)
               <tr>
                 <td>{{ $user->id}}</td>
                 <td>{{ $user->name}}</td>
                 <td>{{ $user->email}}</td>
                 <td>{{ $user->bio}}</td>
               </tr>
              @endforeach
            </tbody>
            {{ $users->render() }}
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
