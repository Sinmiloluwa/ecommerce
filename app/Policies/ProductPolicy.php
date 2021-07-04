<?php

namespace App\Policies;

use App\Models\Shop;
use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function before( $user, $ability)
    {
        if($user->hasRole('admin'))
        {
            return true;
        }
    }

    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }

    public function read(User $user, Product $product)
    {
        if(empty($product->shop))
        {
            return false;
        }
        return $user->id == $product->shop->user_id;;
    }


    public function edit(User $user, Product $product)
    {
        //
        if(empty($product->shop))
        {
            return false;
        }
        return $user->id == $product->shop->user_id;
    }

    public function add(User $user)
    {
        //
        return $user->hasRole('seller');
    }


    public function delete(User $user, Product $product)
    {
        //
        if(empty($product->shop))
        {
            return false;
        }
        return $user->id == $product->shop->user_id;
    }


    public function forceDelete(User $user, Product $product)
    {
        //
    }
}
