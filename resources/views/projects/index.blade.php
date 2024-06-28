<!-- stady_project\resources\views\projects\index.blade.php -->

@extends('projects.layouts')

@section('content')
    <div class="container">
        <h1>Projects</h1>
        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">انشئ دراسه جدوى مشروعك</a>
        <a href="{{ route('costs.create') }}" class="btn btn-primary mb-3">انشئ التكاليف </a>
        <form action="{{ route('projects.index') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search by project name">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">بحث</button>
                </div>
            </div>
        </form>
        

      
      
      


        <table class="table">
            <thead>
                <tr>
                    <th>ت</th>
                    <th>اسم المشروع</th>
                    <th>الهدف من المشروع</th>
                    <th>مميزات المشروع</th>
                    <th>مقايس اداءه نجاح المشروع </th>
                    <th>المستخدمون الجدد شهريا</th>
                    <th>المهام المضافة شهريا</th>
                    <th>عدد المستخدمين سنويا</th>
                    <th>المهام الشهريه </th>
                    <th>التوصيات والتقييم</th>
                    <th>تقييم المخاطر</th>
                    <th>موعد الإكمال</th>
                    <th>اجهزة التي تشغل المشروع </th>
                    <th>حاله الدفع</th>
                    <th>الاجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->project_goal }}</td>
                    <td>{{ $project->project_features }}</td>
                    <td>{{ $project->performance_measure }}</td>
                    <td>{{ $project->new_users_monthly }}</td>
                    <td>{{ $project->tasks_added_monthly }}</td>
                    <td>{{ $project->annual_users }}</td>
                    <td>{{ $project->monthly_tasks }}</td>
                    <td>{{ $project->recommendations }}</td>
                    <td>{{ $project->risk_assessment }}</td>
                    <td>{{ $project->completion_date }}</td>
                    <td>{{ $project->supported_devices }}</td>
                    <td>{{ $project->payment_status }}</td>
                    <td>
                        <a href="{{ route('costs.show', ['id' => $project->id]) }}" class="btn btn-info">
                            عرض
                        </a>
                        
                        
                        
                        <a href="{{ route('projects.edit', ['id' => $project->id]) }}" class="btn btn-primary">تعديل</a>
                        <form action="{{ route('projects.destroy', ['id' => $project->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this project?')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

   


@endsection
