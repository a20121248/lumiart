@extends('app.layouts.main')
@section('head-title', $head_title)
@section('description', $description)

@section('content')
  @include('app.layouts.partials.breadcrumbs',['title'=>$title,'breadcrumbs_description'=>$breadcrumbs_description])
@stop
