<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Technology extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        //return only fields that are needed
        return [
            'id' => $this->id,
            'tech' => $this->tech,
            'description' => $this->description
        ];
    }

    public function with( $request )
    {
        return [
            'github' => url('https://github.com/spkellydev?tab=repositories')
        ];
    }
}
