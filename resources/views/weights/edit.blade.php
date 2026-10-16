<x-weight title="แก้ไขข้อมูลน้ำหนัก">
    <div class="card shadow-sm"><div class="card-body">
        <form action="{{ route('weights.update', $weight) }}" method="POST" novalidate>
            @csrf
            @method('PUT')
            @include('weights._form')
        </form>
    </div></div>
</x-weight>