@extends('layout')

@section('breadcrumbs')

    {{Breadcrumbs::render('city', $city->country->continent, $city->country, $city)}}

@endsection
