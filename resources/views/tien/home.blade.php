@extends('tien.layouts.master')
@section('title', 'App Home')

@section('myStyle')
    <!-- Datatables -->
    <link href="../backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
@stop
@section('main-title', 'Management Home Page')
@section('quick-views')
    {{--if --}}
    @include('tien.partials.quick-views')
    {{--endif --}}
@stop

@section('main-content')
    @include('tien.home_part.table-main')
@stop

@section('myScript')
    <!-- iCheck -->
    <script src="../backend/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../backend/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../backend/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../backend/vendors/pdfmake/build/vfs_fonts.js"></script>
@stop

@section('script_after')
    <script>
        // iCheck Custom
        $('input.flat').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
        // /iCheck
    </script>
@stop