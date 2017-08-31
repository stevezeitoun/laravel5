@extends('layouts.template')
@section('content')

<br />
<div class="col-sm-offset-4 col-sm-4">
    <div class="panel panel-info">
        <div class="panel-heading">Inscription a la newsletter</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('storeEmail') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">Newletter</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-default">
                            Envoyer
                        </button>

                </div>
            </form>

        </div>

    </div>

</div>

@endsection
