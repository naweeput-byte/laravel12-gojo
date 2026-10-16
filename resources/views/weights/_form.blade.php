<div class="mb-3">
    <label for="weight_date" class="form-label">วันที่</label>
    <input type="date" name="weight_date" id="weight_date"
           class="form-control @error('weight_date') is-invalid @enderror"
           value="{{ old('weight_date', isset($weight) ? $weight->weight_date->format('Y-m-d') : date('Y-m-d')) }}">
    @error('weight_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="weight" class="form-label">น้ำหนัก (กก.)</label>
    <input type="number" step="0.01" name="weight" id="weight"
           class="form-control @error('weight') is-invalid @enderror"
           value="{{ old('weight', $weight->weight ?? '') }}">
    @error('weight') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="note" class="form-label">หมายเหตุ (ไม่บังคับ)</label>
    <input type="text" name="note" id="note"
           class="form-control @error('note') is-invalid @enderror"
           value="{{ old('note', $weight->note ?? '') }}">
    @error('note') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<button type="submit" class="btn btn-primary">บันทึก</button>
<a href="{{ route('weights.index') }}" class="btn btn-secondary">ยกเลิก</a>