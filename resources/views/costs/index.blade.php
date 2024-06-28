<!-- resources/views/costs/index.blade.php -->

@extends('costs.layouts')

@section('content')
    <div class="container">
        <h2>قائمة التكاليف</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                  
                    <th>التكاليف العامة</th>
                    <th>تكاليف العمالة</th>
                    <th>تكاليف الثابتة</th>
                    <th>إيرادات الإعلانات</th>
                    <th>تاريخ بدء المشروع</th>
                    <th>تاريخ انتهاء المشروع</th>
                    <th>العمليات</th>
                </tr>
               
            </thead>
            <tbody>
                @foreach($costs as $cost)
                <tr>
                    <td>{{ $cost->id }}</td>
                    <td>{{ $cost->labor_costs + $cost->fixed_costs + $cost->advertising_revenue  }}</td>
                    {{-- @if($cost->id)
    <!-- عرض المعلومات عن المشروع -->
    {{ $cost->labor_costs }}
@else
    <!-- عرض رسالة تنبيه بأن المشروع غير موجود -->
    الى الان لم يتم انشاء الصفحة
@endif --}}
                    <td>{{ $cost->labor_costs }}</td>
                    <td>{{ $cost->fixed_costs }}</td>
                    <td>{{ $cost->advertising_revenue }}</td>
                    <td>{{ $cost->project_start_date }}</td>
                    <td>{{ $cost->project_end_date }}</td>
                    <td>
                     <form action="{{ route('costs.destroy', $cost->id) }}" method="POST">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger">حذف</button>
                     </form>
                 </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
