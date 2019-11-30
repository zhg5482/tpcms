<?php
/**
 * 任务控制器
 */

namespace app\admin\controller;

use think\Request;

class TaskController extends Controller
{
    //列表
    public function index(Request $request)
    {
        $param = $request->param();
        $data = [];
        $this->assign([
            'data'  => $data,
        ]);
        return $this->fetch();
    }
}
