<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\StagiaireTestController;

Route::get('stagiaires/role/{roleId}', [StagiaireTestController::class, 'getStagiairesByRole']);
Route::get('roles/stagiaire/{stagiaireId}', [StagiaireTestController::class, 'getRolesByStagiaire']);
Route::post('stagiaire/{stagiaireId}/add-role/{roleId}', [StagiaireTestController::class, 'addRoleToStagiaire']);
Route::delete('stagiaire/{stagiaireId}/delete-role/{roleId}', [StagiaireTestController::class, 'removeRoleFromStagiaire']);
Route::delete('stagiaire/{stagiaireId}/delete-all-roles', [StagiaireTestController::class, 'removeAllRolesFromStagiaire']);

