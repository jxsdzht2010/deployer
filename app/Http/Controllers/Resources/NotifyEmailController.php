<?php

namespace REBELinBLUE\Deployer\Http\Controllers\Resources;

use REBELinBLUE\Deployer\Contracts\Repositories\NotifyEmailRepositoryInterface;
use REBELinBLUE\Deployer\Http\Requests\StoreNotifyEmailRequest;

/**
 * Controller for managing NotifyEmails.
 */
class NotifyEmailController extends ResourceController
{
    /**
     * Class constructor.
     *
     * @param  NotifyEmailRepositoryInterface $repository
     * @return void
     */
    public function __construct(NotifyEmailRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Store a newly created NotifyEmail in storage.
     *
     * @param  StoreNotifyEmailRequest $request
     * @return Response
     */
    public function store(StoreNotifyEmailRequest $request)
    {
        return $this->repository->create($request->only(
            'name',
            'email',
            'project_id'
        ));
    }

    /**
     * Update the specified NotifyEmail in storage.
     *
     * @param  int                     $email_id
     * @param  StoreNotifyEmailRequest $request
     * @return Response
     */
    public function update($email_id, StoreNotifyEmailRequest $request)
    {
        return $this->repository->updateById($request->only(
            'name',
            'email'
        ), $email_id);
    }
}
