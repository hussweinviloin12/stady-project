 @extends('costs.layouts')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">تفاصيل التكاليف</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>


                                <tr>التسلسل</th>
                                    <td>{{ $id }}</td>
                                </tr>
                                <tr>
                                    <th>تكلفة العمالة</th>
                                    <td>{{ $totalLaborCost }}</td>
                                </tr>
                                <tr>
                                    <th>تكلفة الثابتة</th>
                                    <td>{{ $totalFixedCost }}</td>
                                </tr>
                                <tr>
                                    <th>إيراد الإعلانات</th>
                                    <td>{{ $totalAdvertisingRevenue }}</td>
                                </tr>
                                <tr>
                                    <th>التكلفة الإجمالية</th>
                                    <td>{{ $totalCost }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--
<!-- resources/views/costs/show.blade.php -->


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">تفاصيل التكلفة</div>
    
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>التكلفة العامة</th>
                                    <td>{{ $cost->general_costs }}</td>
                                </tr>
                                <tr>
                                    <th>تكلفة العمالة</th>
                                    <td>{{ $cost->labor_costs }}</td>
                                </tr>
                                <tr>
                                    <th>تكلفة الثابتة</th>
                                    <td>{{ $cost->fixed_costs }}</td>
                                </tr>
                                <tr>
                                    <th>إيراد الإعلانات</th>
                                    <td>{{ $cost->advertising_revenue }}</td>
                                </tr>
                                <!-- يمكنك إضافة المزيد من العناصر هنا -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
