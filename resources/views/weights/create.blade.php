<x-weight title="เพิ่มข้อมูลน้ำหนัก">
    <div class="card shadow-sm"><div class="card-body">
        <form action="{{ route('weights.store') }}" method="POST" novalidate>
            @csrf
            @include('weights._form')
        </form>
    </div></div>
</x-weight>