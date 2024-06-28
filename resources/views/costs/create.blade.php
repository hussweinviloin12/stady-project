@extends('costs.layouts')

<!-- resources/views/costs/create.blade.php -->


@section('content')
    <div class="container">


{{--  --}}
<div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact sales</h2>
    <p class="mt-2 text-lg leading-8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim voluptate.</p>
  </div>

        {{--  --}}
        <h2>إنشاء تكلفة جديدة</h2>
        <form action="{{ route('costs.store') }}" method="POST">
            @csrf
            {{-- <div class="form-group">
                <label for="general_costs">التكاليف العامة:</label>
                <input type="text" name="general_costs" class="form-control">
            </div>  --}}
            <div class="form-group">
                <label for="labor_costs">تكاليف العمالة:</label>
                <input type="text" name="labor_costs" class="form-control">
            </div>
            <div class="form-group">
                <label for="fixed_costs">تكاليف الثابتة:</label>
                <input type="text" name="fixed_costs" class="form-control">
            </div>
            <div class="form-group">
                <label for="advertising_revenue">إيرادات الإعلانات:</label>
                <input type="text" name="advertising_revenue" class="form-control">
            </div>
            <div class="form-group">
                <label for="project_start_date">تاريخ بدء المشروع:</label>
                <input type="date" name="project_start_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="project_end_date">تاريخ انتهاء المشروع:</label>
                <input type="date" name="project_end_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
@endsection
