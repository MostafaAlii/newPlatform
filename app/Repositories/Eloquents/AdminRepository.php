<?php
namespace  App\Repositories\Eloquents;
use App\Models\Admin;
use App\Repositories\Contracts\AdminRepositoryInterface;
use Illuminate\Http\Request;
class AdminRepository implements AdminRepositoryInterface {
    public function index() {
        return 'Admin';
    }

    public function store($request) {

    }

    public function update($request) {

    }

    public function destroy($request) {

    }
}
