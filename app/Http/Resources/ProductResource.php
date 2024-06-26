<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "category" => $this->category->category_name,
            "product" => ucwords($this->product_name),
            "description" => $this->product_description,
            "publish" => $this->publish == "1" ? "publish" : "not publish"
        ];
    }
}
