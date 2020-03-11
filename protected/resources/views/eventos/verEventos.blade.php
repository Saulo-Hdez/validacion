@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Blank')

@section('sub-header')
<div class="col-lg-6 col-md-4 col-sm-12 text-right">
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif
</div>
@stop

@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Ver</strong> evento</h2>
            </div>
            <div class="body">
                <h5>Stater page</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('') }}">
@stop

@section('page-script')
<script src="{{ asset('') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop
