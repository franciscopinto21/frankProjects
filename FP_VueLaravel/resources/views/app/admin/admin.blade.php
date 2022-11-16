<h1>Admin Page</h1>
{{-- Testando comentario invisivel no client --}}

@php

echo 'hello';

@endphp

@if(count($param) > 0 && count($param) < 10)
    <h2>menos de 10</h2>
@elseif(count($param) > 10)
    <h2>mais de 10</h2>
@else
    <h2>nenhum</h2>
@endif