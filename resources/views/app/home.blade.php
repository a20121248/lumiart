@extends('app.layouts.main')
@section('head-title', $head_title)
@section('description', $description)

@section('content')
{{--<img src="{{ asset('storage/images/pruebas/img001.jpg') }}" alt="">--}}
<img src="{{ asset('storage/images/pruebas/img002.png') }}" alt="">
@stop

@push('styles')
<style id='alma-custom-style-inline-css' type='text/css'>
.fullwidth-container{height: auto;}.vc_custom_1529683287225{margin-top: 120px !important;margin-bottom: 90px !important;}.vc_custom_1600266573867{padding-top: 100px !important;padding-bottom: 120px !important;}.vc_custom_1529603735610{padding-top: 100px !important;padding-bottom: 100px !important;}.vc_custom_1554831235746{padding-bottom: 50px !important;}.vc_custom_1600266584786{padding-top: 100px !important;padding-bottom: 100px !important;}.vc_custom_1530112491437{padding-top: 120px !important;padding-bottom: 120px !important;}.vc_custom_1525125729894{padding-top: 100px !important;padding-bottom: 100px !important;}.vc_custom_1531066924450{padding-top: 100px !important;padding-bottom: 30px !important;}.vc_custom_1593614246628{margin-bottom: 50px !important;padding-top: 70px !important;padding-bottom: 100px !important;}.vc_custom_1529595449952{padding-right: 25px !important;padding-left: 25px !important;}.vc_custom_1532011156961{padding-right: 25px !important;padding-left: 25px !important;}.vc_custom_1532011160456{padding-right: 25px !important;padding-left: 25px !important;}.vc_custom_1480354597759{margin-bottom: 60px !important;}.vc_custom_1540047367718{padding-right: 25px !important;padding-left: 25px !important;}.vc_custom_1540047373365{padding-right: 25px !important;padding-left: 25px !important;}.vc_custom_1540047379284{padding-right: 25px !important;padding-left: 25px !important;}.vc_custom_1540047384507{padding-right: 25px !important;padding-left: 25px !important;}.vc_custom_1540047391324{padding-right: 25px !important;padding-left: 25px !important;}.vc_custom_1540047398251{padding-right: 25px !important;padding-left: 25px !important;}body{visibility:visible;}
</style>
@endpush

@push('scripts')
<script src="{{ asset('js/home.js') }}" defer></script>
@endpush