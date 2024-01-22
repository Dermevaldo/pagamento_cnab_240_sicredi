<?php

namespace Dermevaldo\Pagamento\Contracts\Cnab;

interface Remessa extends Cnab
{
    public function gerar();
}
