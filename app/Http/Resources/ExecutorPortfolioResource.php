<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExecutorPortfolioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
                             'id' => $this->id,
                  'portfolio_pic' => $this->portfolio_pic,
            'executor_profile_id' => $this->executor_profile_id,
              'portfoliopic_base' => $this->portfoliopic_base,

        ];
    }
}
