<div class="main-table">
    <form action="" method="post">
        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
            <thead>
            <tr>
                {{--<th>--}}
                {{--<th><input type="checkbox" id="check-all" class="flat"></th>--}}
                <th>Tip</th>
                {{--</th>--}}
                <th>Mã_BN</th>
                <th>Tên</th>
                <th>Loại Bệnh</th>
                <th>Nặng</th>
                <th>Tuổi</th>
                <th>Mã Thuốc</th>
                <th>Tổng_Số</th>
                {{--<th>Phone</th>--}}
            </tr>
            </thead>


            <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>
                        {{--<th><input type="checkbox" id="check-all" class="flat"></th>--}}
                        <input name="get_checkbox[]" type="checkbox" id="check-all" class="flat" value="{{
                        $patient->patient_id
                        }}">
                    </td>
                    <td>{{ $patient->patient_id }}</td>
                    <td>{{ $patient->patient_name }}</td>
                    <td>{{ $patient->loai_benh }}</td>
                    <td>{{ $patient->weight }}</td>
                    <td>{{ $patient->age }}</td>
                    <td>{{ $patient->code_thuoc }}</td>
                    <td>{{ $patient->qty }}</td>
                    {{--<td>{{ $patient->phone }}</td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
</div>