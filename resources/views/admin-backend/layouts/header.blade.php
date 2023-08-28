<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="">
    <title>
        Investment Trading Group
    </title>

    @if(request()->route()->action['as'] === "admin.homepage.addSection" || request()->route()->action['as'] === "admin.homepage.editSection")
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- Bootstrap Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{ asset("assets/css/jstinker.css") }}" type="text/css">
    @else
        <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/draggable-table.css') }}" rel="stylesheet" />
        <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.min21cd.css') }}?v=1.0.9" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
</head>
<body class="g-sidenav-show  bg-gray-100">
