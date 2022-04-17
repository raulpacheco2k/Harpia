<?php

namespace Modules\Financial\Repositories;

use Modules\Financial\Models\BankAccountType;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class BankAccountTypeRepository.
 *
 * @package namespace App\Repositories;
 */
class BankAccountTypeRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BankAccountType::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
