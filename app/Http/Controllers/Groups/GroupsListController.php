<?php

namespace App\Http\Controllers\Groups;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Exception;
use Illuminate\Http\Request;

class GroupsListController extends Controller
{
    public function __construct(private Role $groups)
    {
    }

    //
    public function __invoke()
    {
        try {
            return response()->json($this->groups->latest()->get(), 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
