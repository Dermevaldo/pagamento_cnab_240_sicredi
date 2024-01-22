<?php

namespace Dermevaldo\Pagamento\Pagamento\Banco;

use Dermevaldo\Pagamento\Contracts\Pagamento\Pagamento as PagamentoContract;
use Dermevaldo\Pagamento\Pagamento\AbstractPagamento;

/**
 * Class Sicredi
 * @package Dermevaldo\Pagamento\Boleto\Banco
 */
class Sicredi extends AbstractPagamento implements PagamentoContract
{
    const INCLUSAO_REGISTRO_LIBERADO = '00';
    const EXCLUSAO_REGISTRO_INCLUIDO = '99';

    /**
     * Sicredi constructor.
     * @param array $params
     */
    public function __construct(array $params = [])
    {
        parent::__construct($params);
    }

    /**
     * @return mixed|string
     */
    public function getInstrucaoMovimento()
    {
        if ($this->getTipoMovimento() === PagamentoContract::TIPO_MOVIMENTO_EXCLUSAO)
            return Sicredi::EXCLUSAO_REGISTRO_INCLUIDO;

        return Sicredi::INCLUSAO_REGISTRO_LIBERADO;
    }
}
