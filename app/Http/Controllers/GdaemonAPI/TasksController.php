<?php

namespace Gameap\Http\Controllers\GdaemonAPI;

use Gameap\Models\DedicatedServer;
use Gameap\Models\GdaemonTask;
use \Gameap\Repositories\GdaemonTaskRepository;

class TasksController extends Controller
{
    /**
     * The GdaemonTasksRepository instance.
     *
     * @var \Gameap\Repositories\GdaemonTaskRepository
     */
    protected $repository;

    /**
     * Create a new GdaemonTasksController instance.
     *
     * @param  \Gameap\Repositories\GdaemonTaskRepository $repository
     */
    public function __construct(GdaemonTaskRepository $repository)
    {
        parent::__construct($repository);
        
        $this->repository = $repository;
    }

    /**
     * Get waiting tasks list
     * 
     * @param DedicatedServer $dedicatedServer
     *
     * @return mixed
     */
    public function getWaiting(DedicatedServer $dedicatedServer)
    {
        return $this->repository->getWaitingList($dedicatedServer);
    }

    /**
     * Get working tasks list
     * 
     * @param DedicatedServer $dedicatedServer
     *
     * @return mixed
     */
    public function getWorking(DedicatedServer $dedicatedServer)
    {
        return $this->repository->getWorkingList($dedicatedServer);
    }
}