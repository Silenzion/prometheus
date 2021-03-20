<?php

namespace Silenzion\Prometheus\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Article extends Model{

    use SoftDeletes;
}