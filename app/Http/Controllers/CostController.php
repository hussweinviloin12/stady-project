<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;

class CostController extends Controller
{
    // عرض جميع التكاليف
    public function index()
    {
        $costs = Cost::all();
        return view('costs.index', compact('costs'));
    }

    // إنشاء تكلفة جديدة
    public function create()
    {
        return view('costs.create');
    }

    // حفظ التكلفة الجديدة
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            
            'labor_costs' => 'required|numeric',
            'fixed_costs' => 'required|numeric',
            'advertising_revenue' => 'required|numeric',
            'project_start_date' => 'required|date',
            'project_end_date' => 'nullable|date|after_or_equal:project_start_date',
        ]);
    
        // Create a new Cost instance with the validated data
        Cost::create($validatedData);
    
        // Redirect back to the index page with a success message
        return redirect()->route('costs.index')->with('success', 'تم إنشاء التكلفة بنجاح');
    }
    

    // عرض تكلفة معينة
    // public function show($id)
    // {
    //     $cost = Cost::findOrFail($id);
    //     return view('costs.show', compact('cost'));
    // }

    public function show($id)
{
    $cost = Cost::find($id);
    if (!$cost) {
        // عرض الصفحة البديلة مع الرسالة
        return view('costs.not_found');
    }
    
    // حساب مجموع التكاليف الفردية
    $totalLaborCost = $cost->labor_costs;

    $totalFixedCost = $cost->fixed_costs;
    $totalAdvertisingRevenue = $cost->advertising_revenue;
    
    // حساب التكلفة الإجمالية
    $totalCost = $totalLaborCost + $totalFixedCost + $totalAdvertisingRevenue;

    return view('costs.show', [
    'id'=>$id,
        'cost' => $cost,
        'totalLaborCost' => $totalLaborCost,
        'totalFixedCost' => $totalFixedCost,
        'totalAdvertisingRevenue' => $totalAdvertisingRevenue,
        'totalCost' => $totalCost,
    ]);
}


    // تحرير تكلفة معينة
    public function edit($id)
    {
        $cost = Cost::findOrFail($id);
        return view('costs.edit', compact('cost'));
    }

    // تحديث تكلفة معينة
    public function update(Request $request, $id)
    {
        $cost = Cost::findOrFail($id);
        $cost->update($request->all());
        return redirect()->route('costs.index')->with('success', 'تم تحديث التكلفة بنجاح');
    }

    // حذف تكلفة معينة
    public function destroy($id)
    {
        $cost = Cost::findOrFail($id);
        $cost->delete();
        return redirect()->route('costs.index')->with('success', 'تم حذف التكلفة بنجاح');
    }
}
