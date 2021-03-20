<?php

namespace Silenzion\Prometheus\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['name', 'value'];
}
