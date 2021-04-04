<?php

namespace App\Models;

use App\Entities\UserInfo;
use CodeIgniter\Model;

class UsersInfoModel extends Model
{

    protected $table      = 'users_info';
    protected $primaryKey = 'id_user';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_user','name', 'surname', 'id_country'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}
