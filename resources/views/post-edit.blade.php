<!doctype html>
<html lang="{{ config('app.locale') }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- styles -->
      <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css">
   </head>
   <body>
      <a href="{{ URL::action('PostController@index') }}">Retour à la liste</a> - <a href="{{ URL::action('PostController@view', $post->id) }}">Annuler</a>
      <h1>Editer l'article</h1>
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <div class="panel panel-default">
                      <div class="panel-heading">Article</div>
                      <div class="panel-body">
                          <form class="form-horizontal" role="form" method="POST" action="{{ url('update') }}">
                              {{ csrf_field() }}

                              <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                  <label for="title" class="col-md-4 control-label">titre article</label>

                                  <div class="col-md-6">
                                      <input id="title" type="title" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                      @if ($errors->has('title'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('title') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                  <label for="body" class="col-md-4 control-label">Description</label>

                                  <div class="col-md-6">
                                      <textarea id="body" type="body" class="form-control" name="content" required></textarea>

                                      @if ($errors->has('body'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('body') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>



                              <div class="form-group">
                                  <div class="col-md-8 col-md-offset-4">
                                      <button type="submit" class="btn btn-default">
                                          Enregistrer
                                      </button>

                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </body>
</html>
