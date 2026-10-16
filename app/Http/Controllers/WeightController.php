<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    private function rules(): array
    {
        return [
            'weight_date' => 'required|date|before_or_equal:today',
            'weight'      => 'required|numeric|min:20|max:300',
            'note'        => 'nullable|string|max:255',
        ];
    }

    private function messages(): array
    {
        return [
            'weight_date.required'        => 'กรุณาเลือกวันที่',
            'weight_date.date'            => 'รูปแบบวันที่ไม่ถูกต้อง',
            'weight_date.before_or_equal' => 'วันที่ต้องไม่เกินวันนี้',
            'weight.required'             => 'กรุณากรอกน้ำหนัก',
            'weight.numeric'              => 'น้ำหนักต้องเป็นตัวเลข',
            'weight.min'                  => 'น้ำหนักต้องไม่น้อยกว่า 20 กก.',
            'weight.max'                  => 'น้ำหนักต้องไม่เกิน 300 กก.',
            'note.max'                    => 'หมายเหตุยาวเกิน 255 ตัวอักษร',
        ];
    }

    public function index()
    {
        $weights = Weight::orderByDesc('weight_date')->get();

        // ข้อมูลสำหรับ Google Chart (เรียงจากเก่าไปใหม่)
        $chartData = Weight::orderBy('weight_date')->get()
            ->map(fn ($w) => [$w->weight_date->format('d/m/Y'), (float) $w->weight])
            ->values();

        return view('weights.index', compact('weights', 'chartData'));
    }

    public function create()
    {
        return view('weights.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules(), $this->messages());
        Weight::create($data);

        return redirect()->route('weights.index')->with('success', 'เพิ่มข้อมูลน้ำหนักเรียบร้อยแล้ว');
    }

    public function edit(Weight $weight)
    {
        return view('weights.edit', compact('weight'));
    }

    public function update(Request $request, Weight $weight)
    {
        $data = $request->validate($this->rules(), $this->messages());
        $weight->update($data);

        return redirect()->route('weights.index')->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    public function destroy(Weight $weight)
    {
        $weight->delete();

        return redirect()->route('weights.index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}