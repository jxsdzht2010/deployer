<?php

namespace REBELinBLUE\Deployer;

use Illuminate\Database\Eloquent\Model;

/**
 * Model for SSH keys
 */
class Key extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'private_key', 'public_key'];
}
