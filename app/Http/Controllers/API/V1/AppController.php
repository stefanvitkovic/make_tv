<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use App\Repositories\AppRepository;
use App\Http\Controllers\Controller;
use App\Interfaces\AppRepositoryInterface;
use Validator;

class AppController extends Controller
{
    private AppRepositoryInterface $appRepository;

    public function __construct(AppRepositoryInterface $appRepository) 
    {
        $this->appRepository = $appRepository;
    }

    /**
     * index
     *
     * Shows all apps.
     *
     * Get("api/v1/apps")
     * 
     * @param  \Illuminate\Http\Request  $request
     * 
     * Request({
     *  "locale":1, // locale id => 1 = sr
     * })
     * 
     * @return
     * Response(200, body={"data": {"obj"}}),
     */

    public function index(Request $request)
    {
        $data = $request->validate([
            'locale' => 'integer|nullable'
        ]);

        return $this->appRepository->getAll($data);
    }
}
