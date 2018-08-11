<?php

namespace App\Repositories;

use App\Models\Member;
use App\Presenters\MemberPresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

use App\Validators\MemberValidator;

/**
 * Class MemberRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class MemberRepositoryEloquent extends BaseRepository implements MemberRepository
{
    protected $fieldSearchable = [
        'name'=> 'like',//like 模糊查询
        'email',
    ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Member::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return MemberValidator::class;
    }

    /**
     * 设置返回数据资源
     * @return string
     */
    public function presenter()
    {
//        return MemberPresenter::class;
        return "Prettus\\Repository\\Presenter\\ModelFractalPresenter";
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
