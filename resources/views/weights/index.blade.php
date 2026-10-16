<x-weight title="ข้อมูลน้ำหนักที่บันทึกไว้">

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="card-title">กราฟน้ำหนัก</h5>
            @if ($chartData->isEmpty())
                <p class="text-muted mb-0">ยังไม่มีข้อมูลสำหรับแสดงกราฟ</p>
            @else
                <div id="weight_chart" style="height: 350px;"></div>
            @endif
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">รายการ</h5>
                <a href="{{ route('weights.create') }}" class="btn btn-primary btn-sm">+ เพิ่มข้อมูล</a>
            </div>

            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>วันที่</th>
                        <th>น้ำหนัก (กก.)</th>
                        <th>หมายเหตุ</th>
                        <th class="text-end">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($weights as $w)
                    <tr>
                        <td>{{ $w->weight_date->format('d/m/Y') }}</td>
                        <td>{{ number_format($w->weight, 2) }}</td>
                        <td>{{ $w->note }}</td>
                        <td class="text-end">
                            <a href="{{ route('weights.edit', $w) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                            <form action="{{ route('weights.destroy', $w) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('ยืนยันการลบข้อมูลนี้?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">ลบ</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center text-muted">ยังไม่มีข้อมูล</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <x-slot:scripts>
        @if ($chartData->isNotEmpty())
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            google.charts.load('current', { packages: ['corechart'] });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const rows = @json($chartData);
                const data = new google.visualization.DataTable();
                data.addColumn('string', 'วันที่');
                data.addColumn('number', 'น้ำหนัก (กก.)');
                data.addRows(rows);

                const options = {
                    legend: { position: 'none' },
                    curveType: 'function',
                    pointSize: 6,
                    hAxis: { title: 'วันที่' },
                    vAxis: { title: 'น้ำหนัก (กก.)' },
                    chartArea: { width: '85%', height: '70%' }
                };

                new google.visualization.LineChart(document.getElementById('weight_chart'))
                    .draw(data, options);
            }
        </script>
        @endif
    </x-slot:scripts>
</x-weight>