<h3>Fornecedor</h3>
<hr>

@isset($fornecedores)

    @foreach ($fornecedores as $indice => $fornecedor)
        Interação atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} - {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            Primeira interação do Loop
        @endif

        @if ($loop->last)
            Última interação do Loop
        @endif
        <hr>
    @endforeach

@endisset



