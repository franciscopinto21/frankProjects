<h1>Admin Page</h1>
{{-- Testando comentario invisivel no client --}}

@php

echo 'hello';

@endphp

{{'Test String'}}

<br>
<br>

@isset($param)

    @if(count($param) > 0 && count($param) < 10)
        <h2>menos de 10</h2>
    @elseif(count($param) > 10)
        <h2>mais de 10</h2>
    @else
        <h2>nenhum</h2>
    @endif

        @isset($param)
        esta aqui o parametro
        @endisset
    <br>
    {{-- unless --}}
    @unless(count($param) > 10)
        Usando Unless
    @endunless

@endisset

{{-- 
    empty variable is:
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
--}}
<br>

@empty($param['param3'])
- vazio
@endempty


<br>
{{ $param['param1'] }}
<br>
{{ $param['param2'] }}
<br>
{{ $param['param3'] }}
<br>
{{ $param['param4'] ?? 'Nao informado'}}


<br>
<br>

@foreach ($param as $row )
    <h2>{{ $row ?? 'Vazio' }}</h2>
@endforeach


@switch($param['param4'])
    @case(null)
        Invalido
        @break
    @default
        Algum valor
@endswitch        

<br>
<br>

@php $i = 0 @endphp
@while(isset($fornecedores[$i]))
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
    <hr>
    @php $i++ @endphp
@endwhile

@{{$fornecedores}}


<br>
<br>
@forelse($fornecedores as $indice => $fornecedor)

        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if($loop->first)
            Primeira iteração no loop


        @endif

        @if($loop->last)
            Última iteração no loop
            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse

