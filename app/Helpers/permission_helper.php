<?php

if(!function_exists('hasPermission')) {
  
  function hasPermission(string $permissionName, int $userId = null) {
    
    $userId = $userId ?? session('user_id');

    $db = \Config\Database::connect();

    //Check if permission assigned to user
    $userPermission = $db->table('user_permission')
          ->where('user_id', $userId)
          ->join('permissions', 'permissions.id = user_permission.permission_id')
          ->where('permissions.slug', $permissionName)
          ->get()
          ->getRow();
          
      if($userPermission) {
         return true;
      }

        //Check role based permission
        $userModel = new \App\Models\UserModel();
        $user = $userModel->find($userId);
        if(!$user) {
          return false;
        }

        $rolePermission = $db->table('role_permission')
               ->where('role_id', $user['role_id'])
               ->join('permissions', 'permissions.id = role_permission.permission_id')
               ->where('permissions.slug', $permissionName)
               ->get()
               ->getRow();
        
        return $rolePermission ? true : false;

   }


}