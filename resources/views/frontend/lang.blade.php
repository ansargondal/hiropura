@foreach (language()->allowed() as $code => $name)
    <a href="{{ language()->back($code) }}">{{ $name }}</a>
@endforeach