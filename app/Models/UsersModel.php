<?php

namespace App\Models;

use App\Entities\UserInfo;
use CodeIgniter\Model;

class UsersModel extends Model
{

    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'email', 'password', 'group'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $beforeInsert = ['addGroup'];
    protected $afterInsert = ['storeUserInfo'];

    protected function storeUserInfo($data){

        $this->infoUser->id_user = $data['id'];
        $model = model('UsersInfoModel');
        $model->insert($this->infoUser);
    }

    protected function addGroup($data){

        $data['data']['group'] = $this->assignGroup;

        return $data;

    }

    protected $assignGroup;
    protected $infoUser;

    public function withGroup(string $group){

        $row = $this->db->table('groups')->where('name_group',$group)->get()->getFirstRow();
        if($row !== null){
            $this->assignGroup = $row->id_group;
        }
    }

    public function addUserInfo(UserInfo $ui){
        $this->infoUser = $ui;
    }
}
