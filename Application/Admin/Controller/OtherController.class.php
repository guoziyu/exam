<?php
namespace Admin\Controller;
use Think\Controller;
class OtherController extends CommonController {

	public function Schoolindex(){
		$num = 1;
    	$school = M('school');
    	$result = $school->order('id desc')->select();
    	$this -> assign('school',$result);
    	$this -> assign('num',$num);
    	$this -> display('schoolindex');
	}

	//校区
	public function AddSchool(){
		$school = M('school');
		if($school -> create()){
			$result = $school->add();
			if($result){
				$this -> success('添加成功');
			}
		}

	}

	public function editschool(){
		$school = M('school');
		$data['names'] = I('post.edit_name');
		$data['id'] = I('post.edit_id');
		$result = $school->where('id='.$data['id'])->save($data);
		if($result){
			$this->ajaxreturn(0);
		}else{
			$this->ajaxreturn(1);
		}
	}


	public function DeleteSchool(){
		$id = I('get.id');
		$school = M('school');
		$result = $school ->where('id='.$id)->delete();
		if($result){
			$this->success('删除成功');
		}
	}

	//----------------------------//
	//班级
	public function ClassIndex(){
		$num = 1;
		$class = M('class');
		$school = M('school');
		$result = $school->order('id desc')->select();
		$res = $class->join('__SCHOOL__ on __CLASS__.school_id = __SCHOOL__.id','LEFT')->order('exam_school.id,exam_class.id')->getField('exam_class.id,exam_class.name,exam_class.school_id,exam_school.names');
		$this -> assign('main',$res);
		$this -> assign('data',$result);
		$this -> assign('num',$num);
		$this -> display('classindex');
	}


	public function AddClass(){
		$class = M('class');
		if($class -> create()){
			$result = $class->add();
			if($result){
				$this -> success('添加成功');
			}
		}
	}

	public function editClass(){
		$class = M('class');
		$data['id'] = I('post.edit_id');
		$data['name'] = I('post.input_value');
		$data['school_id'] = I('post.select_id');
		
		$result = $class->where('id='.$data['id'])->save($data);

		if($result){

			$this->ajaxreturn(1);
		}else{
			$this->ajaxreturn(0);
		}
	}

	public function DeleteClass(){
		$id = I('get.id');
		$class = M('class');
		$result = $class ->where('id='.$id)->delete();
		if($result){
			$this->success('删除成功');
		}
	}

	public function Typeindex(){
		$num = 1;
		$type = M('type');
		$result = $type->order('id desc')->select();
		// dump($result);
		$this -> assign('main',$result);
		$this -> assign('num',$num);
		$this -> display('typeindex');

	}
	public function AddType(){
		$type = M('type');
		if($type -> create()){
			$result = $type->add();
			if($result){
				$this -> success('添加成功');
			}
		}
	}

	public function editType(){
		$type = M('type');//实例化对象
		$data['id'] = I('post.edit_id');//获取当前信息id
		$data['name'] = I('post.input_value');//获取修改类别名称
		$data['state'] = I('post.select_state');//获取修改状态
		$result = $type->where('id='.$data['id'])->save($data);//修改数据
		//返回结果
		if($result){
			$this->ajaxreturn(1);
		}else{
			$this->ajaxreturn(0);
		}
	}

	public function DeleteType(){
		$id = I('get.id');
		$type = M('type');
		$result = $type ->where('id='.$id)->delete();
		if($result){
			$this->success('删除成功');
		}
	}

}