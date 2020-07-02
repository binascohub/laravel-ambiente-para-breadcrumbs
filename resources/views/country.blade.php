@extends('layout')

@section('breadcrumbs')

    {{Breadcrumbs::render('country',$country->continent, $country)}}

@endsection
