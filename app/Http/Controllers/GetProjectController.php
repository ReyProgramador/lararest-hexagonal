<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class GetProjectController extends Controller
{
    /**
     * @var \Src\BoundedContext\User\Infrastructure\GetUserController
     */
    private $getUserController;

    public function __construct(\Src\BoundedContext\Project\Infrastructure\GetProjectController $getProjectController)
    {
        $this->getProjectController = $getProjectController;
    }

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
