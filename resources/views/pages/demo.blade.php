<h1>Hello {{ $name ?? 'New User' }}</h1>
<h3>from {{ $district ?? 'Unknown Place' }}</h3>

<p>for print with HTML decode: </p>
{!! $htmlDecode !!}
