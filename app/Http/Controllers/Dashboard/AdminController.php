<?php
namespace App\Http\Controllers\Dashboard;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\AdminRepositoryInterface;
class AdminController extends Controller implements AdminRepositoryInterface {
    public function __construct(protected AdminRepositoryInterface $adminInterface) {
        $this->adminInterface = $adminInterface;
    }
    public function index() {
        return $this->adminInterface->index();
    }
}
