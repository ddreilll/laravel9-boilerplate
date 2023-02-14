<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductStockResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
