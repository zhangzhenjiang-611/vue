<?php
namespace Edu\Permission\Http\Api\Services\AdminUser;


use Edu\Permission\Requests\AdminUser\StoreAdminUserRequest;
use Edu\Permission\Repository\Eloquent\AdminUserRepositoryEloquent;
use Prettus\Validator\Exceptions\ValidatorException;

class AdminUserStoreService
{
    /**
     * @var StoreAdminUserRequest $request
     */
    protected StoreAdminUserRequest $request;
    /**
     * @var AdminUserRepositoryEloquent $repository
     */
    protected AdminUserRepositoryEloquent $repository;

    public function __construct(StoreAdminUserRequest $request,AdminUserRepositoryEloquent $repository)
    {
        $this->request = $request;
        $this->repository = $repository;

    }

    public function save()
    {
        //验证
        $this->request->validated();
        try {
            $user = $this->repository->create($this->request->except('roleIds'));
            $user->roles()->attach($this->request->input('roleIds'));
            return $user;
        } catch (ValidatorException $e) {
        }
    }

}
