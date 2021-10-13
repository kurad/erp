@extends('dashboards.layout')

@section('content')
<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          
            <div class="card">
                <div class="card-header">{{ __('Master Trainer Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
      </div>
    </div>
</div>

@endsection
