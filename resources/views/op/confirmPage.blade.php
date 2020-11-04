@foreach ($students as $student)
    {{ $student->confirm }}
    <br>
@endforeach
{{ $students->links('vendor.pagination.custom') }}
