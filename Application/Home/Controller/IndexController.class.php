<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    
    public function index(){
//      $code = $_GET['code'];
//      //获取用户信息
//      $user_data = R('WeChat/getCode',array('code'=>$code));
//      //推荐人id
//      $parent_zero_id = $_GET['parent_zero_id'];
//      if($parent_zero_id){
//          //获取推荐人信息
//          $where_zero = array(
//              "id" => $parent_zero_id
//          );
//          $parent_zero_data = M("WxUser")->where($where_zero)->find();
//          //判断推荐人等级获取上级信息
//          $grade = $parent_zero_data['grade'];
//          if($grade == 1){ //推荐人为专员
//              $parent_one_id = $parent_zero_data['id'];
//              $parent_two_id = $parent_zero_data['parent_one_id'];
//              $parent_three_id = $parent_zero_data['parent_two_id'];
//          } elseif($grade == 2){ //推荐人为经理
//              $parent_one_id = "";
//              $parent_two_id = $parent_zero_id;
//              $parent_three_id = $parent_zero_data['parent_one_id'];
//          } elseif($grade == 3){ //推荐人为银行家
//              $parent_one_id = "";
//              $parent_two_id = "";
//              $parent_three_id = $parent_zero_id;
//          }
//      } else {
//          $parent_one_id = "";
//          $parent_two_id = "";
//          $parent_three_id = "";
//      }
//
//      //判断是否已添加过该用户信息
//      $where = array(
//          "openid" => $user_data['openid']
//      );
//      $find_data = M('WxUser')->where($where)->find();
//      if(!$find_data){
//          $add_data = array(
//              "openid" => $user_data["openid"],
//              "nickname" => $user_data["nickname"],
//              "sex" => $user_data["sex"],
//              "language" => $user_data["language"],
//              "city" => $user_data["city"],
//              "province" => $user_data["province"],
//              "country" => $user_data["country"],
//              "headimgurl" => $user_data["headimgurl"],
//              "parent_zero_id" => $parent_zero_id,
//              "parent_one_id" => $parent_one_id,
//              "parent_two_id" => $parent_two_id,
//              "parent_three_id" => $parent_three_id
//          );
//
//          $add_status = M('WxUser')->add($add_data);
//          if(!$add_status){
//              $this->error("获取用户信息失败，请重新进入。");
//          }
//      }
      $this->display();
    }

    //申请代理页面
    public function applyAgent(){

        $this->display();
    }

    //填写代理信息
    public function submitMoney(){

        $this->display();
    }

    //套現入口页面
    public function cashEntry(){

        $this->display();
    }

    //订单记录
    public function orderRecord(){

        $this->display();
    }
    /**
     * *****************************************用户中心********************************************
     */
    //用户中心
    public function userCenter(){

        $this->display();
    }

    //用户中心 -- 已结算
    public function incomeDetails(){

        $this->display();
    }

    //用户中心 -- 可结算
    public function income(){

        $this->display();
    }

    //用户中心 -- 授权审核
    public function authorizationManagement(){

        $this->display();
    }

    //客户管理
    public function customerManagement(){

        $this->display();
    }

    //所属海报
    public function exclusivePosters(){

        $this->display();
    }

    //专属客服
    public function customerService(){

        $this->display();
    }

    //应知应汇
    public function shouldKnowShouldRemit(){

        $this->display();
    }

    //系统通知
    public function systemInforms(){

        $this->display();
    }

    //帮助
    public function help(){

        $this->display();
    }

    /**
     * *****************************************刷卡订单********************************************
     */
    //刷卡订单
    public function addCreditCard(){

        $this->display();
    }

    //最新活动
    public function latestActivity(){

        $this->display();
    }




















































    //************************************************************用户管理***************************************************************//

    //部门列表
    public function department_list(){
        $m_department = D('department');

        $where = array(
            "is_del" => 0
        );

        $count = $m_department->where($where)->count();
        $p = getpage($count,20);
        $list = $m_department->where($where)->limit($p->firstRow, $p->listRows)->order('id desc')->select();

        $this->assign('page', $p->show()); //赋值分页输出
        $this->assign('list', $list);
        $this->display();
    }

    //部门添加页面
    public function department_add(){

      $this->display();
    }

    //执行部门添加
    public function department_add_do(){
      $post_data = $_POST;

      if(!$post_data['department_name']){
          $return = array(
              "status" => false,
              "message" => "部门名称不能为空"
          );
      } else {
          $add_data = array(
              "department_name" => $post_data["department_name"],
              "create_time" => time()
          );
          $m_department = D('department');
          $result = $m_department->add($add_data);

          if($result){
              $return = array(
                  "status" => true
              );
          } else {
              $return = array(
                  "status" => false,
                  "message" => "添加失败"
              );
          }
      }
      
      $this->ajaxReturn($return);
    }

    //部门编辑页面
    public function department_edit(){
      $id = $_GET['id'];
      $post_data = $_POST;

      $m_department = D('department');
      $where = array(
          "id" => $id
      );
      $data = $m_department->where($where)->find();

      $this->assign("data", $data);
      $this->assign("id", $id);
      $this->display();
    }

    //执行部门编辑
    public function department_edit_do(){
      $post_data = $_POST;

      if(!$post_data['department_name']){
          $return = array(
              "status" => false,
              "message" => "部门名称不能为空"
          );
      }
      $m_department = D('department');

      $result = $m_department->save($post_data);

      if($result){
          $return = array(
              "status" => true
          );
      } else {
          $return = array(
              "status" => false,
              "message" => "编辑失败"
          );
      }

      $this->ajaxReturn($return);
    }

    //部门删除
    public function department_del(){
      $id = $_POST['id'];
      $m_department = D('department');

      $save_data = array(
          "id" => $id,
          "is_del" => 1
      );
      $result = $m_department->save($save_data);

      if($result){
          $return = array(
              "status" => true
          );
      } else {
          $return = array(
              "status" => false,
              "message" => "删除失败"
          );
      }

      $this->ajaxReturn($return);
    }



    //职务列表
    public function duty_list(){
      $m_duty = D('duty');
      $where = array(
          "is_del" => 0
      );      

      $count = $m_duty->where($where)->count();
      $p = getpage($count, 20);
      $list = $m_duty->where($where)->limit($p->firstRow, $p->listRows)->order('id desc')->relation(true)->select();

      $this->assign("list", $list);
      $this->assign("page", $p->show());
      $this->display();
    }


    //职务添加
    public function duty_add(){
      //获取部门数据
      $m_department = D('department');
      $where = array(
          "is_del" => 0
      ); 
      $data = $m_department->where($where)->select();

      $this->assign("data", $data);
      $this->display();
    }

    //执行职务添加
    public function duty_add_do(){
      $post_data = $_POST;
      if(!$post_data['department_id']){
          $return = array(
              "status" => false,
              "message" => "所属部门不能为空"
          );
      } elseif(!$post_data['duty_name']){
          $return = array(
              "status" => false,
              "message" => "职务名称不能为空"
          );
      } else {
          $add_data = array(
              "department_id" => $post_data["department_id"],
              "duty_name" => $post_data["duty_name"],
              "create_time" => time()
          );
          $m_duty = D('duty');
          $result = $m_duty->add($add_data);

          if($result){
              $return = array(
                  "status" => true
              );
          } else {
              $return = array(
                  "status" => false,
                  "message" => "添加失败"
              );
          }
      }
      
      $this->ajaxReturn($return);
    }

    //职务编辑页面
    public function duty_edit(){
        //获取所有部门数据
        $m_department = D('department');
        $where = array(
            "is_del" => 0
        ); 
        $department_data = $m_department->where($where)->select();

        $id = $_GET['id'];
        $post_data = $_POST;

        $m_duty = D('duty');
        $where = array(
            "id" => $id
        );
        $data = $m_duty->where($where)->relation(true)->find();

        $this->assign("department_data", $department_data);
        $this->assign("data", $data);
        $this->assign("id", $id);
        $this->display();
    }

    //执行职务编辑
    public function duty_edit_do(){
        $post_data = $_POST;

        if(!$post_data['duty_name']){
            $return = array(
                "status" => false,
                "message" => "职务名称不能为空"
            );
        }
        $m_duty = D('duty');
        $result = $m_duty->save($post_data);

        if($result){
            $return = array(
                "status" => true
            );
        } else {
            $return = array(
                "status" => false,
                "message" => "编辑失败"
            );
        }

        $this->ajaxReturn($return);
    }

    //执行职务删除
    public function duty_del(){
        $id = $_POST['id'];
        $m_duty = D('duty');

        $save_data = array(
            "id" => $id,
            "is_del" => 1
        );
        $result = $m_duty->save($save_data);

        if($result){
            $return = array(
                "status" => true
            );
        } else {
            $return = array(
                "status" => false,
                "message" => "删除失败"
            );
        }

        $this->ajaxReturn($return);
    }

    //用户列表
    public function user_list(){
      $m_user = D('user');
      $where = array(
          "is_del" => 0
      );

      $count = $m_user->where($where)->count();
      $p = getpage($count, 20);

      $list = $m_user->where($where)->limit($p->firstRow, $p->listRows)->order('id desc')->relation(true)->select();

      $this->assign("list", $list);
      $this->assign("page", $p->show());
      $this->display();
    }

    //用户添加页面
    public function user_add(){
        //获取部门数据
        $m_department = D('department');
        $where = array(
            "is_del" => 0
        ); 
        $data = $m_department->where($where)->select();
        //获取职务数据
        $m_duty = D('duty');
        $data_duty = $m_duty->where($where)->select();

        $this->assign("data_duty", $data_duty);
        $this->assign("data", $data);
        $this->display();
    }

    //执行用户添加
    public function user_add_do(){
      $post_data = $_POST;
      if(!$post_data['department_id']){
          $return = array(
              "status" => false,
              "message" => "所属部门不能为空"
          );
      } elseif(!$post_data['duty_id']){
          $return = array(
              "status" => false,
              "message" => "所属职务不能为空"
          );
      } elseif(!$post_data['username']){
          $return = array(
              "status" => false,
              "message" => "用户姓名不能为空"
          );
      } elseif(!$post_data['account']){
          $return = array(
              "status" => false,
              "message" => "登录账户不能为空"
          );
      } else {
          $add_data = array(
              "department_id" => $post_data["department_id"],
              "duty_id" => $post_data["duty_id"],
              "username" => $post_data["username"],
              "account" => $post_data["account"],
              "create_time" => time()
          );
          $m_user = D('user');
          $result = $m_user->add($add_data);

          if($result){
              $return = array(
                  "status" => true
              );
          } else {
              $return = array(
                  "status" => false,
                  "message" => "添加失败"
              );
          }
      }
      
      $this->ajaxReturn($return);
    }

    //用户编辑页面
    public function user_edit(){
      //获取所有部门数据
      $m_department = D('department');
      $where = array(
          "is_del" => 0
      ); 
      $department_data = $m_department->where($where)->select();

      //获取所有职务数据
      $m_duty = D('duty');
      $where_duty = array(
          "is_del" => 0
      );
      $duty_data = $m_duty->where($where_duty)->select();


      $id = $_GET['id'];
      $post_data = $_POST;

      $m_user = D('user');
      $where = array(
          "id" => $id
      );
      $data = $m_user->where($where)->relation(true)->find();

      $this->assign("duty_data", $duty_data);
      $this->assign("department_data", $department_data);
      $this->assign("data", $data);
      $this->assign("id", $id);
      $this->display();
    }

    //执行用户编辑
    public function user_edit_do(){
        $post_data = $_POST;

        if(!$post_data['department_id']){
          $return = array(
              "status" => false,
              "message" => "所属部门不能为空"
          );
      } elseif(!$post_data['duty_id']){
          $return = array(
              "status" => false,
              "message" => "所属职务不能为空"
          );
      } elseif(!$post_data['username']){
          $return = array(
              "status" => false,
              "message" => "用户姓名不能为空"
          );
      } elseif(!$post_data['account']){
          $return = array(
              "status" => false,
              "message" => "登录账户不能为空"
          );
      } else {
          $m_user = D('user');
          $result = $m_user->save($post_data);

          if($result){
              $return = array(
                  "status" => true
              );
          } else {
              $return = array(
                  "status" => false,
                  "message" => "编辑失败"
              );
          }
      }
        

        $this->ajaxReturn($return);
    }

    //执行用户删除
    public function user_del(){
        $id = $_POST['id'];
        $m_user = D('user');

        $save_data = array(
            "id" => $id,
            "is_del" => 1
        );
        $result = $m_user->save($save_data);

        if($result){
            $return = array(
                "status" => true
            );
        } else {
            $return = array(
                "status" => false,
                "message" => "删除失败"
            );
        }

        $this->ajaxReturn($return);
    }





    //***********************************************************业绩考核管理************************************************************//
    
    //业绩考核列表
    public function yjkh_list(){
      $m_yjkh = D('yjkh');

      $where = array(
          "is_del" => 0
      );

      $count = $m_yjkh->where($where)->count();// 查询满足要求的总记录数
      $p = getpage($count,20); 
      $list = $m_yjkh->where($where)->limit($p->firstRow, $p->listRows)->order('id desc')->relation(true)->select();

      $this->assign('page', $p->show()); //赋值分页输出
      $this->assign("list", $list);
      $this->display();
    }

    //业绩考核添加页面
    public function yjkh_add(){
        //获取考核类型
        $type = $_GET['type'];
        //获取填写人数据
        $user_id_list = session("user_id_list");
        if($user_id_list){
            $user_type = 1;
        } else {
            $user_type = 0;
        }

        //获取所有部门信息
        $m_department = D('department');
        $where = array(
            "is_del" => 0
        );

        $department_data = $m_department->where($where)->select();

        $this->assign("type", $type);
        $this->assign('department_data', $department_data);
        $this->assign('user_type', $user_type);
        $this->display();
    }

    //执行业绩考核添加
    public function yjkh_add_do(){

      $post_data = $_POST;
      $user_id_array = session("user_id_list");
      $user_id_list=implode(',',$user_id_array);

      $type = $_POST['type'];
      $use_department_id = $_POST['use_department_id'];
      $assess_type = $_POST['assess_type'];

      $where = array(
          "type" => $type,
          "use_department_id" => $use_department_id,
          "assess_type" => $assess_type 
      );

      $m_yjkh = D('yjkh');
      $yjkh_data = $m_yjkh->where($where)->find();

      if($yjkh_data){
          if($type == 1){
              $result = array(
                  "status" => false,
                  "message" => "该部门已经添加过该类型的绩效考核模板，请勿重新添加"
              );
          } else {
              $result = array(
                  "status" => false,
                  "message" => "该部门已经添加过该类型的行为考核模板，请勿重新添加"
              );
          }
      } elseif(!$post_data['title']){
          $result = array(
              "status" => false,
              "message" => "标题不能为空"
          );
      } elseif (!$post_data['use_department_id']) {
          $result = array(
              "status" => false,
              "message" => "使用部门不能为空"
          );
      } elseif(!$post_data['st'] || !$post_data['et']){
          $result = array(
              "status" => false,
              "message" => "时间范围不能为空"
          );
      } elseif(!$post_data['assess_type']){
          $result = array(
              "status" => false,
              "message" => "考勤类型不能为空"
          );
      } elseif(!$user_id_list){
          $result = array(
              "status" => false,
              "message" => "填写人不能为空"
          );
      } elseif (!$post_data['assessment_name_one']) {
          $result = array(
              "status" => false,
              "message" => "考核项目名称不能为空"
          );
      } elseif (!$post_data['score_one']) {
          $result = array(
              "status" => false,
              "message" => "分数不能为空"
          );
      } elseif (!$post_data['require_one']) {
          $result = array(
              "status" => false,
              "message" => "指标要求不能为空"
          );
      } elseif (!$post_data['opinion_rating_one']) {
          $result = array(
              "status" => false,
              "message" => "评价等级要求不能为空"
          );
      } 

      else {
          $add_data = array(
              "type" => $post_data['type'],
              "title" => $post_data['title'],
              "use_department_id" => $post_data['use_department_id'],
              "status_time" => strtotime($post_data['st']),
              "end_time" => strtotime($post_data['et']) + 24*60*60-1,
              "assess_type" => $post_data['assess_type'],
              "fill_in_user_id" => $user_id_list,
              "assessment_name_one" => $post_data['assessment_name_one'],
              "score_one" => $post_data["score_one"],
              "require_one" => $post_data["require_one"],
              "opinion_rating_one" => $post_data["opinion_rating_one"],

              "assessment_name_two" => $post_data["assessment_name_two"],
              "score_two" => $post_data["score_two"],
              "require_two" => $post_data["require_two"],
              "opinion_rating_two" => $post_data["opinion_rating_two"],

              "assessment_name_three" => $post_data["assessment_name_three"],
              "score_three" => $post_data["score_three"],
              "require_three" => $post_data["require_three"],
              "opinion_rating_three" => $post_data["opinion_rating_three"],
              
              "assessment_name_four" => $post_data["assessment_name_four"],
              "score_four" => $post_data["score_four"],
              "require_four" => $post_data["require_four"],
              "opinion_rating_four" => $post_data["opinion_rating_four"],
              
              "create_time" => time()
          );

          $m_yjkh = M('yjkh');

          $return = $m_yjkh->add($add_data);
          if($return){
              $result = array(
                  "status" =>true,
              );
          } else {
              $result = array(
                  "status" => false,
                  "message" => "添加失败"
              );
          }
      }

      $this->ajaxReturn($result);
    }

    //绩效考核详情
    public function yjkh_details(){
      $id = $_GET['id'];
      $m_yjkh = M('yjkh');
      $where = array(
          "id" => $id,
          "is_del" => 0
      );
      $data = $m_yjkh->where($where)->find();

      $this->assign("data", $data);
      $this->display();
    }

    //绩效考核编辑页面
    public function yjkh_edit(){
      $id = $_GET['id'];
      $m_yjkh = M('yjkh');
      $where = array(
          "id" => $id,
          "status" => 0
      );
      $data = $m_yjkh->where($where)->find();

      $this->assign("data",$data);
      $this->assign('id', $id);
      $this->display();      
    }

    //执行绩效考核编辑
    public function yjkh_edit_do(){
        $post_data = $_POST;

        if(!$post_data["title"]){
            $result = array(
                "status" => false,
                "message" => "标题不能为空"
            );
        } elseif (!$post_data['assessment_name_one']) {
            $result = array(
                "status" => false,
                "message" => "考核项目一名称不能为空"
            );
        } elseif (!$post_data["require_one"]) {
            $result = array(
                "status" => false,
                "message" => "考核项目一指标要求不能为空"
            );
        } elseif (!$post_data["opinion_rating_one"]) {
            $result = array(
                "status" => false,
                "message" => "考核项目一评价等级要求不能为空"
            );
        } 

        elseif (!$post_data['assessment_name_two']) {
            $result = array(
                "status" => false,
                "message" => "考核项目二名称不能为空"
            );
        } elseif (!$post_data["require_two"]) {
            $result = array(
                "status" => false,
                "message" => "考核项目二指标要求不能为空"
            );
        } elseif (!$post_data["opinion_rating_two"]) {
            $result = array(
                "status" => false,
                "message" => "考核项目二评价等级要求不能为空"
            );
        }

        elseif (!$post_data['assessment_name_three']) {
            $result = array(
                "status" => false,
                "message" => "考核项目三名称不能为空"
            );
        } elseif (!$post_data["require_three"]) {
            $result = array(
                "status" => false,
                "message" => "考核项目三指标要求不能为空"
            );
        } elseif (!$post_data["opinion_rating_three"]) {
            $result = array(
                "status" => false,
                "message" => "考核项目三评价等级要求不能为空"
            );
        }

        elseif (!$post_data['assessment_name_four']) {
            $result = array(
                "status" => false,
                "message" => "考核项目四名称不能为空"
            );
        } elseif (!$post_data["require_four"]) {
            $result = array(
                "status" => false,
                "message" => "考核项目四指标要求不能为空"
            );
        } elseif (!$post_data["opinion_rating_four"]) {
            $result = array(
                "status" => false,
                "message" => "考核项目四评价等级要求不能为空"
            );
        }

        else {
            $edit_data = array(
                "id" => $post_data["id"],
                "title" => $post_data["title"],

                "assessment_name_one" => $post_data["assessment_name_one"],
                "require_one" => $post_data["require_one"],
                "opinion_rating_one" => $post_data["opinion_rating_one"],

                "assessment_name_two" => $post_data["assessment_name_two"],
                "require_two" => $post_data["require_two"],
                "opinion_rating_two" => $post_data["opinion_rating_two"],

                "assessment_name_three" => $post_data["assessment_name_three"],
                "require_three" => $post_data["require_three"],
                "opinion_rating_three" => $post_data["opinion_rating_three"],

                "assessment_name_four" => $post_data["assessment_name_four"],
                "require_four" => $post_data["require_four"],
                "opinion_rating_four" => $post_data["opinion_rating_four"],
            );

            $m_yjkh = M('yjkh');
            $request = $m_yjkh->save($edit_data);

            if($request){
                $result = array(
                    "status" => true
                );
            } else {
                $result = array(
                    "status" => false,
                    "message" => "编辑失败"
                );
            }
        }

        $this->ajaxReturn($result);
    }

    //绩效考核删除
    public function yjkh_del(){
        $id = $_POST['id'];
        $m_yjkh = M('yjkh');
        $save_data = array(
            "id" => $id,
            "is_del" => 1
        );
        
        $result = $m_yjkh->save($save_data);
        
        if($result){
            $result = array(
                "status" => true
            );
        } else {
            $result = array(
                "status" => false
            );
        }
        
        $this->ajaxReturn($result);
    }

    //填写人群列表
    public function yjkh_fill_in_user_add(){
        $m_department = D('department');
        $where = array(
            "is_del" => 0
        );

        $department_data = $m_department->where($where)->relation(true)->select();


        $this->assign('department_data', $department_data);
        $this->display();
    }

    //执行添加填写人
    public function yjkh_fill_in_user_add_to(){
        session("user_id_list", $_POST['user_id']);

        $user_id_list = session("user_id_list");
        
        if($user_id_list){
            $result = array(
                "status" => true
            );
        } else {
            $result = array(
                "status" => false,
                "message" => "提交失败"
            );
        }    

        $this->ajaxReturn($result);  
    }

    //我的绩效考核列表
    public function yjkh_list_oneself(){
        $m_user_yjkh = D('user_yjkh');
        $where = array(
            "is_del" => 0,
            "appraiser_id" => session("user_id")
        );
        
        $count = $m_user_yjkh->where($where)->count();
        $p = getpage($count, 20);
        $list = $m_user_yjkh->where($where)->limit($p->firstRow, $p->listRows)->relation(true)->select();

        $this->assign("username", session("username"));
        $this->assign("page", $p->show());
        $this->assign("list", $list);
        $this->display();
    }

    //我的绩效考核添加页面
    public function user_yjkh_add(){
        $type = $_GET['type'];
        $assess_type = $_GET['assess_type'];
        $user_id = session("user_id");
        //获取用户信息
        $m_user = D('user');
        $user_data = $m_user->where(array('id' => $user_id))->find();
        $department_id = $user_data['department_id'];

        $m_yjkh = D('yjkh');
        $where = array(
            "is_del" => 0,
            "department_id" => $department_id,
            "type" => $type,
            "assess_type" => $assess_type
        );

        $yjkh_list = $m_yjkh->where($where)->find();
        $yjkh_data = array();

        $fill_in_user_id_array = explode(',',$yjkh_list['fill_in_user_id']); //将字符串转换成数组
        if(in_array($user_id, $fill_in_user_id_array)){ //填写人id是否包含当前用户id
              $yjkh_data = $yjkh_list;
        }

        //除去自己的id
        foreach ($fill_in_user_id_array as $key => $value) {
            if($user_id == $value) {
                unset($fill_in_user_id_array[$key]);
            }
        }

        //查询出所有互评用户信息
        foreach ($fill_in_user_id_array as $key => $value) {
            $where_user = array(
               "id" => $value
            );

            $assess_user_data[] = $m_user->where($where_user)->field('id,username')->find();
        }
        


        $this->assign("assess_user_data", $assess_user_data);
        $this->assign("type", $type);
        $this->assign("assess_type", $assess_type);
        $this->assign('yjkh_data', $yjkh_data);
        $this->display();
    }

    //执行我的业绩考核添加
    public function user_yjkh_add_do(){
        $post_data = $_POST;
        $type = $post_data["type"];

        $is_true = false;
        if($type == 1 ){  //绩效考核
            if($post_data['assess_type'] == 1){ //自评
                if(!$post_data['self_assessment_one'] || !$post_data['self_assessment_two'] || !$post_data['self_assessment_three'] || !$post_data['self_assessment_four']){
                    $result = array(
                        "status" => false,
                        "message" => "评分信息不完整"
                    );
                } else {
                  $is_true = true;
                  $post_data['by_appraiser_id'] = session('user_id');
                }
            } elseif($post_data['assess_type'] == 2){ //互评
                if(!$post_data['peer_assessment_one'] || !$post_data['peer_assessment_two'] || !$post_data['peer_assessment_three'] || !$post_data['peer_assessment_four']){
                    $result = array(
                        "status" => false,
                        "message" => "评分信息不完整"
                    );
                } else {
                  $is_true = true;
                }
            }
            
            
        } elseif($type == 2){ //行为考核
            if($post_data['assess_type'] == 1){ //自评
                if(!$post_data['self_assessment_one'] || !$post_data['self_assessment_two'] || !$post_data['self_assessment_three']){
                    $result = array(
                        "status" => false,
                        "message" => "评分信息不完整"
                    );
                } else {
                  $is_true = true;
                  $post_data['by_appraiser_id'] = session('user_id');

                }
            } elseif($post_data['assess_type'] == 2){ //互评
                if(!$post_data['peer_assessment_one'] || !$post_data['peer_assessment_two'] || !$post_data['peer_assessment_three']){
                    $result = array(
                        "status" => false,
                        "message" => "评分信息不完整"
                    );
                } else {
                  $is_true = true;
                }
            }
        } 

        if($is_true){
            $add_data = array(
                "appraiser_id" => session("user_id"), //评价人id
                "by_appraiser_id" => $post_data['by_appraiser_id'],  //被评价人id
                "type" => $post_data["type"],
                "yjkh_id" => $post_data['yjkh_id'],
                "assess_type" => $post_data["assess_type"],
                "self_assessment_one" => $post_data['self_assessment_one'],
                "peer_assessment_one" => $post_data['peer_assessment_one'],
                "self_assessment_two" => $post_data['self_assessment_two'],
                "peer_assessment_two" => $post_data['peer_assessment_two'],
                "self_assessment_three" => $post_data['self_assessment_three'],
                "peer_assessment_three" => $post_data['peer_assessment_three'],
                "self_assessment_four" => $post_data['self_assessment_four'],
                "peer_assessment_four" => $post_data['peer_assessment_four'],
                "score_total" => $post_data['score_total'],
                "create_time" => time()
            );

            $m_user_yjkh = D('user_yjkh');
            $request = $m_user_yjkh->add($add_data);

            if($request){
                $result = array(
                    "status" => true,
                );
            } else {
                $result = array(
                    "status" => false,
                    "message" => "添加失败"
                );
            }
        }

        $this->ajaxReturn($result);
    }

    //用户考核历史页面
    public function user_yjkh_list(){
        $m_user_yjkh = D('user_yjkh');
        $where = array(
            "is_del" => 0
        );

        $count = $m_user_yjkh->where($where)->count();
        $p = getpage($count, 20);
        $list = $m_user_yjkh->where($where)->limit($p->firstRow, $p->listRows)->relation(true)->select();

        $this->assign("page", $p->show());
        $this->assign("list", $list);
        $this->display();
    }
    


}