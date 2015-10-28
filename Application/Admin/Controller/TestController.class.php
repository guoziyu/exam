<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends CommonController {
	public function index(){
		$test = M('test');
		$type = M('type');
		$subject = M('subject');
		
		$subject_id = I('get.subject_id');
		$type_id = I('get.type_id');
		$search = I('get.search');
		if($subject_id > 0){
			$subject_name = " and t.sub_id = {$subject_id} ";
			$map['sub_id'] = ' t.sub_id = '.$subject_id;
		}

		if($type_id > 0){
			$type_name = " and t.type = {$type_id} ";
			$map['type'] = ' t.type = '.$type_id;
		}

		if($search){
			$question = " and t.question like '%{$search}%' ";
			$map['question'] = " t.question like '%{$search}%' ";
		}


		$count = $test->where($map)->count();
		$page  = new \Think\Page($count,10);

		foreach($map as $key=>$val) {    
			$page->parameter   .=   "$key=".urlencode($val).'&';
		}

		$sql = "select t.*,y.name,s.name as names from exam_test as t,exam_type as y,exam_subject as s where t.sub_id=s.id and t.type=y.id {$subject_name} {$type_name} {$question}  order by addtime desc limit {$page->firstRow},{$page->listRows}";
		
		$res = $test ->query($sql);

    	$page -> setConfig('prev','&lsaquo;');
    	$page -> setConfig('next','&rsaquo;');

    	$show = $page->show();
		$this -> assign('page',$show);

		$type_res = $type -> select();
		$subject_res = $subject -> field('id,name') -> select();
		$this -> assign('type',$type_res);
		$this -> assign('subject',$subject_res);
		$this -> assign('statu',$status);
		$this -> assign('test',$res);
		$this -> display();
	}

	public function add(){
		$subject = M('subject');
		$type = M('type');
		$result = $subject->select();
		$res = $type -> select();
		$this -> assign('sub',$result);
		$this -> assign('type',$res);
		$this -> display();
	}

	public function insert(){
		$test = D('test');
		date_default_timezone_set( 'PRC' );
		$time = time();
		$data = $_POST;
		$data['addtime'] = date('y-m-d H:i:s',$time);
		if($test -> create()){
			$result = $test -> add($data);
			if($result){
				$this -> redirect('Admin/Test/index');
			}
		}
	}

	public function edit(){
		$type = M('type');
		$id = I('get.id');
		$sql = 'select t.*,y.name,y.id as typeid,s.name as names from exam_test as t,exam_type as y,exam_subject as s where t.sub_id=s.id and t.type=y.id and t.id='.$id;
		$res = $type ->query($sql);
		$this -> assign('types',$res);
		$this -> display();
	}

	public function update(){
		$test = D('test');
		date_default_timezone_set( 'PRC' );
		$time = time();
		$data = $_POST;
		$data['addtime'] = date('y-m-d H:i:s',$time);
		$res = $test -> where('id='.$data['id'])->save($data);
		if($res){
			$this -> redirect('Admin/Test/index');
		}
	}

	public function info(){

	}

	public function delete(){
		$test = D('test');
		$id = I('get.id');
		$res = $test->where('id='.$id)->delete();
		if($res){
			$this -> redirect('Admin/Test/index');
		}
	}

	public function school_ajax(){
		$id = $_GET['id'];
	}
}
?>