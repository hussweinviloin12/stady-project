@extends('projects.layouts')

@section('content')

<div class="container">
    <h3>تعديل على معلومات دراسه جدوى هذالمشروع </h3>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
       @csrf
        @method('PUT')
          
      
            <div class="form-group">
             <label for="project_name">اسم المشروع</label>
             <input type="text" class="form-control" id="project_name" name="project_name" value="{{ $project->project_name }}" required>
         </div>
         <div class="form-group">
             <label for="project_goal">هدف المشروع</label>
             <textarea class="form-control" id="project_goal" name="project_goal">
                {{ $project->project_goal }}
             </textarea>
         </div>
         <div class="form-group">
             <label for="project_features">مميزات المشروع</label>
             <textarea class="form-control" id="project_features" name="project_features">{{ $project->project_features }}</textarea>
         </div>
         <div class="form-group">
             <label for="performance_measure">مقايس اداه نجاح المشروع</label>
             <input type="text" class="form-control" id="performance_measure" name="performance_measure" value="{{ $project->performance_measure }}">
         </div>
         <div class="form-group">
             <label for="new_users_monthly">المستخدمون الجدد شهريا</label>
             <input type="number" class="form-control" id="new_users_monthly" name="new_users_monthly" value="{{ $project->new_users_monthly }}">
         </div>
         <div class="form-group">
             <label for="tasks_added_monthly">المهام المضافة شهريا</label>
             <input type="number" class="form-control" id="tasks_added_monthly" name="tasks_added_monthly"  value="{{ $project->tasks_added_monthly }}">
         </div>
         <div class="form-group">
             <label for="annual_users">عدد المستخدمين سنويا</label>
             <input type="number" class="form-control" id="annual_users" name="annual_users"  value="{{ $project->annual_users }}">
         </div>
         <div class="form-group">
             <label for="monthly_tasks">المهام الشهريه </label>
             <input type="number" class="form-control" id="monthly_tasks" name="monthly_tasks" value="{{ $project->monthly_tasks }}">
         </div>
         <div class="form-group">
             <label for="recommendations">التوصيات والتقييم</label>
             <textarea class="form-control" id="recommendations" name="recommendations">{{ $project->recommendations }}</textarea>
         </div>
         <div class="form-group">
             <label for="risk_assessment">تقييم المخاطر</label>
             <textarea class="form-control" id="risk_assessment" name="risk_assessment" >{{ $project->risk_assessment }}</textarea>
         </div>
         <div class="form-group">
             <label for="completion_date">موعد الإكمال</label>
             <input type="date" class="form-control" id="completion_date" name="completion_date" value="{{ $project->completion_date }}" >
         </div>
         <div class="form-group">
            <label for="supported_devices">اجهزة التي تشغل المشروع</label>
            <input type="text" class="form-control" id="supported_devices" name="supported_devices" value="{{ $project->supported_devices }}">
        </div>
         <div class="form-group">
             <label for="payment_status">حاله الدفع</label>
             <select class="form-control" id="payment_status" name="payment_status">
                 <option value="paid">Paid</option>
                 <option value="free">Free</option>
             </select>
         </div>
         <button type="submit" class="btn btn-primary">تعديل </button>
    </form> 
 </div>
@endsection
