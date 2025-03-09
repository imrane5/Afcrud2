<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use App\Models\Role;
use Illuminate\Http\Request;

class StagiaireTestController extends Controller
{
    // Récupérer tous les stagiaires ayant un rôle spécifique
    public function getStagiairesByRole($roleId)
    {
        $role = Role::findOrFail($roleId);
        $stagiaires = $role->stagiaires;
       
    }

    // Récupérer tous les rôles pour un stagiaire spécifique
    public function getRolesByStagiaire($stagiaireId)
    {
        $stagiaire = Stagiaire::findOrFail($stagiaireId);
        $roles = $stagiaire->roles;
       
    }

    // Add a role to a stagiaire
    public function addRoleToStagiaire($stagiaireId, $roleId)
    {
        $stagiaire = Stagiaire::findOrFail($stagiaireId);
        $roles = new Role([
            'nom' => 'Editor'
        ]);
        $stagiaire->roles()->save($roles);
        
    }

    // Supprimer un rôle spécifique à un stagiaire
    public function removeRoleFromStagiaire($stagiaireId, $roleId)
    {
        $stagiaire = Stagiaire::findOrFail($stagiaireId);
        $stagiaire->roles()->detach($roleId);
        
    }

    // Supprimer tous les rôles d'un stagiaire
    public function removeAllRolesFromStagiaire($stagiaireId)
    {
        $stagiaire = Stagiaire::findOrFail($stagiaireId);
        $stagiaire->roles()->detach();
        
    }
}

