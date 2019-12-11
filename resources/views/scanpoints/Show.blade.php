@foreach ($scandepartments as $scandepartment)
@foreach ($scanpoints as $scanpoint)
 @if ($scandepartment->id === $scanpoint->department_id)
     {{$scanpoint->id}}
 @endif
@endforeach
@endforeach