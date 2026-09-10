<?php

declare(strict_types=1);

namespace App\Filament\Resources\Produtos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProdutoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nome')
                    ->required(),
                TextInput::make('sku')
                    ->label('SKU')
                    ->mask('aaa-9999')
                    ->required()
                    ->unique(),
                TextInput::make('preco_em_centavos')
                    ->required()
                    ->minValue(1)
                    ->numeric(),
                TextInput::make('estoque')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->default(0),
            ]);
    }
}
