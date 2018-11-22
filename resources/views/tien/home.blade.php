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

    // ===resize iCheck===
    //select iCheck
    let $iCheck = $('div.main-table thead tr th:nth-child(1)');
    $iCheck.css({'width':'20px'});
    $iCheck.on('click', function(e) {
        e.propagationStopped();
    });
    // resize width dataTable
    let resizeWidth = function(stt, width) {
        $('div.main-table thead tr th:nth-child('+stt+')').css({'width':width+'%'});
    };
    resizeWidth(4,20);
    resizeWidth(3,15);

    // Handle Form request
    $(function () {
        let $mainIdTable = $('#datatable-checkbox_wrapper');
        let $headButton = $mainIdTable.find('.row').first();
        let $resizeGird = $headButton.find('.col-sm-6');
        let $elementBtn =
            "<div class='col-sm-6'>"
            + "<button type='button' id='btn-edit' class='btn btn-warning'><i class='fa fa-edit'></i> Edit</button>"
            + "<button type='button' id='btn-add' class='btn btn-success'><i class='fa fa-plus'></i> ADD</button>"
            + "<button type='button' id='btn-remove' class='btn btn-danger'><i class='fa fa-remove'></i> " +
            "Delete</button>"
            +
            "</div>";
        $($elementBtn).insertAfter($resizeGird.first());
        $resizeGird.attr('class','col-sm-2');

        //process button
        let $btnAdd = $('#btn-add');
        let $btnEdit = $('#btn-edit');
        let $btnRemove = $('#btn-remove');

        $btnEdit.on('click', function (e) {
            //e.preventDefault();
            // e.stopPropagation();
            console.log(123);
            // let $g =$("input[name='get_checkbox[]']").val();
            // console.log($g);

            // let fav = [];
            // $.each($("input[name='get_checkbox[]']:checked"), function(){
            //     fav.push($(this).val());
            // });
            // console.log(fav);

            let getCheckbox = function (name) {
                let fav = [];
                $.each($("input[name='"+name+"[]']:checked"), function(){
                    fav.push($(this).val());
                });
                return fav;
            };
            console.log(getCheckbox('get_checkbox'));
        })

    });
</script>
@stop