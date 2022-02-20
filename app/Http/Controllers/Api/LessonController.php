<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LessonRepository;
use App\Http\Resources\LessonResource;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    protected $repository;
    
    public function __construct(LessonRepository $lessonRepository)
    {
        $this->repository = $lessonRepository;
    }
    
    public function index($lessonId)
    {        
        return LessonResource::collection(
            $this->repository->getLessonsByModuleId($lessonId)
        );
    }

    public function show($id)
    {
        return new LessonResource(
            $this->repository->getLessionById($id)
        );
    }

}
