<?php

declare(strict_types=1);

namespace App\Events;

use App\Models\Pedido;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

final readonly class PedidoCriado
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(public Pedido $pedido) {}
}
