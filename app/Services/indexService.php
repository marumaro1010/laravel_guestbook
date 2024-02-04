<?php

namespace App\Services;

use Yish\Generators\Foundation\Service\Service;
use App\Repositories\indexRepository;


class indexService
{
    protected $repository;
    public function __construct(indexRepository $indexrepository)
    {
        $this->repository = $indexrepository;
    }

    //留言表列表
    public function getData()
    {
        $res_data = $this->repository->getData();
        foreach($res_data as $row_data)
        {
            $row_data->m_name = $this->getUserName($row_data->m_uid);
            $res_data->m_add_datetime = 111;
        }
        return $res_data;
    }
    //新增資料
    public function addData($request)
    {
        $data['m_uid'] = 1;
        $data['m_text'] = $request->text;
        $res_data = $this->repository->addData($data);
    }

    //使用者ID轉中文
    public function getUserName($id)
    {
        $res_data = $this->repository->getUserName($id);
        $res_data = json_decode(json_encode($res_data),true);
        return $res_data['u_name'];
    }
}
