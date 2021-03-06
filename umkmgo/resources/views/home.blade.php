@extends('layouts.app')
@section('css')
    <style>
      .color-tos{
            background-color: #6099A6;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a target="_blank" class="btn btn-md waves-effect waves-light" style="background-color:#f28300" href="/form">Post Sekarang!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
