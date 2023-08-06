<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use Illuminate\Http\Request;

// use Src\BoundedContext\Project\Infrastructure\GetProjectController as Testa;

// use Src\BoundedContext\Project\Infrastructure\GetProjectController as Testa;

class GetProjectController extends Controller
{
    /**
     * @var \Src\BoundedContext\User\Infrastructure\GetUserController
     */
    private $getProjectController;

    public function __construct(\Src\BoundedContext\Project\Infrastructure\GetProjectController $getProjectController)
    {
        $this->getProjectController = $getProjectController;
    }

    // public function __construct(Testa $getProjectController)
    // {
    //     $this->getProjectController = $getProjectController;

    //     // print_r(test);
    // }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $project = new ProjectResource($this->getProjectController->__invoke($request));

        return response($project, 200);
    }
}
