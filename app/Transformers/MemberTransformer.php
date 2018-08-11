<?php

namespace App\Transformers;

use App\Models\Member;
use League\Fractal\TransformerAbstract;


/**
 * Class MemberTransformer.
 *
 * @package namespace App\Transformers;
 */
class MemberTransformer extends TransformerAbstract
{
    /**
     * @param Member $model
     * @return array
     */
    public function transform(Member $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
