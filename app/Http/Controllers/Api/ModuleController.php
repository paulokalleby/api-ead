<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ModuleRepository;
use App\Http\Resources\ModuleResource;

class ModuleController extends Controller
{
    protected $repository;
    
    public function __construct(ModuleRepository $moduleRepository)
    {
        $this->repository = $moduleRepository;
    }
    
    public function index($courseId)
    {        
        return ModuleResource::collection(
            $this->repository->getModulesByCourseId($courseId)
        );
    }

    /*
    public function show($id)
    {
        return new ModuleResource($this->repository->getModule($id));
    }*/
}
