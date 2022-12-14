@extends('layouts.app')
 

@if (auth()->user()->user_type==0)
 
<script>
location.href="{{route('dash_admin')}}";
</script>
  
@endif



@if (auth()->user()->user_type==1)
 
<script>
location.href="{{route('dash_emp')}}";
</script>
  
@endif



@section('content')


<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                  <br>
                    <h>  {{auth()->user()->user_type }}</h>
                </div>
            </div>
        </div>
    </div>
</div>
-->

@endsection

