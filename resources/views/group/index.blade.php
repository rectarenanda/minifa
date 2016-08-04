@extends('layout.master')
@section('namauser')
  {{ $user->user_name or 'Default' }}
@stop

@section('profiluser')
    <!-- <img src="" class="img-circle" alt="User Image"> -->
      <p>
        {{$user->comp_name or 'Perusahaan Coba'}}
        <small>Member since Nov. 2012</small>
      </p>
@stop

@section('content')
    @foreach ($grup as $lala)
    <p>This is Group {{ $lala->coa_name }}</p>
@endforeach

@stop