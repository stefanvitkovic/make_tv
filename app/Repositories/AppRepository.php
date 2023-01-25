<?php

namespace App\Repositories;

use App\Models\App;
use App\Http\Resources\AppResource;
use App\Interfaces\AppRepositoryInterface;
use Illuminate\Http\Request;

class AppRepository implements AppRepositoryInterface 
{
    /**
     * getAll
     * 
     * This method retrieves all App records from the database.
     * 
     * @param string|null $locale
     * 
     * @return \Illuminate\Http\JsonResponse|AppResource 
     *                       
     */
    
    public function getAll($locale = null)
    {
        $apps = App::all();

        if (!$apps) {
            return response()->json([
                'message' => 'Apps not found.'
            ], 404);
        }

        return AppResource::collection($apps);
    }

}