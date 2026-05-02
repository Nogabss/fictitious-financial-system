<?php

function calcularSaldo($transacoes) {
    $saldo = 0;

    foreach ($transacoes as $t) {
        if ($t['tipo'] == 'receita') {
            $saldo += $t['valor'];
        } else {
            $saldo -= $t['valor'];
        }
    }

    return $saldo;
}

function formatarReal($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}

function calcularPercentual($valor, $total) {
    if ($total == 0) return 0;
    return ($valor / $total) * 100;
}
?>