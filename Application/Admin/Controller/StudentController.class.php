<?php
namespace Admin\Controller;
use Think\Controller;
class StudentController extends CommonController {

    public function index(){
    	$stu = D('stu_info');
		$school = D('school');
    	$class = D('class');

		$school3 = I('get.school_id');
		$class3 = I('get.class_id');
		$username = I('get.search');

		if($school3>0){
			$school4  = " and t.school_id={$school3} ";
			$wheres = "school_id={$school3}";
			$where[] = $school4;
		}

		if($class3>0){
			$class4   = " and t.class_id={$class3} ";
			$wheres = "class_id={$class3}";
			$where[] = $class4;
		}
		
		if($username){
			$username2 = " and t.name like '%{$username}%' ";
			$wheres = "name like '%{$username}%' ";
			$where[] =$username2;
		}
		
		foreach($where as $key=>$val) {    
			$page->parameter   .=   "$key=".urlencode($val).'&';
		}

		$count = $stu->where($wheres)->count();
		$page  = new \Think\Page($count,15);

		$sql = "select t.*,s.names,c.name as cnames from exam_class as c,exam_school as s,exam_stu_info as t where t.class_id=c.id and t.school_id=s.id {$school4} {$class4} {$username2} order by t.id desc limit {$page->firstRow},{$page->listRows} ";
		
    	$page -> setConfig('prev','&lsaquo;');
    	$page -> setConfig('next','&rsaquo;');

    	$show = $page->show();

		$this -> assign('page',$show);

    	$school2 = $school->select();
    	
		$result = $stu->query($sql);
		// echo $stu->getlastsql();

    	$this -> assign('students',$result);
    	$this -> assign('sch',$school2);
    	if($school3 > 0){
    		$res = $class->where('school_id='.$school3)->select();
    		$this -> assign('cla',$res);
 		}else{
 			$res = $class->select();
 			$this -> assign('cla',$res);
 		}
    	$this -> display();
	}

	public function add(){
		$stu = D('stu_info');
		$school = D('school');
    	$class = D('class');
		//这里要做一个提示，提示添加成功，
    	$schools = $school -> select(); 
    	$classes = $class -> select(); 

    	$this -> assign('school',$schools);
    	$this -> assign('class',$classes);

		if($stu -> create()){
			$result = $stu -> add();
			if($result){
				$str = '<div class="notibar msgsuccess"><a class="close"></a><p>添加成功</p></div>';
				$this->assign('str',$str);
			}else{
				$str = '<div class="notibar msgalert"><a class="close"></a><p></p></div>';
				$this->assign('str',$str);
			}
		}

		$this -> display();
	}

	public function edit(){
		$id = I('get.id');
		$stu = D('stu_info');
		$school = D('school');
    	$class = D('class');

    	$result = $stu->where('id='.$id)->find();
    	$schools = $school -> select(); 
    	$classes = $class ->where('school_id='.$result['school_id']) -> select();

    	$this -> assign('school',$schools);
    	$this -> assign('class',$classes);
    	$this -> assign('id',$id);
		$this -> assign('edit_stu',$result);

		$this -> display();
	}

	public function update(){
		$stu = D('stu_info');
		$data = $_POST;
		$res = $stu -> where('id='.$data['id'])->save($data);
		echo $stu->getlastsql();
		var_dump($res);
		if($res){
			$this -> redirect('Admin/Student/index');
		}else{
			$this -> redirect('Admin/Student/index');
		}
	}

	public function delete(){
		$id = I('get.id');
		$stu = D('stu_info');
		$result = $stu->where('id='.$id)->delete();
		if($result){
			$this -> redirect('Admin/Student/index?status=1');
		}else{
			$this -> redirect('Admin/Student/index?status=0');
		}
	}

	public function addajax(){
		$class = D('class');
		$id = I('get.id');
		$res =  $class -> where('school_id='.$id) -> select();
		$result = json_encode($res);
		$this -> ajaxreturn($result);
	}

	public function ajax_sosou(){
		$schoolid = I('post.id');
		$stu = M('stu_info');
		$class = M('class');
		$school = M('school');
		$res['class'] = $class -> where('school_id='.$schoolid)->select();
		$res['stu'] = $stu -> where('school_id='.$schoolid)->select();		
		// echo $sql;
		foreach ($res['stu'] as $key => $value) {
			$row['school'] = $school->field('names')->where('id='.$value['school_id'])->find();
			$row['class'] = $class->field('name')->where('id='.$value['class_id'])->find();
			// print_r($row);
			$res['stu'][$key]['cname'] = $row['class']['name'];
			$res['stu'][$key]['sname'] = $row['school']['names'];
		}

		// print_r($res);
		$this->ajaxreturn($res);
		//$this->ajaxreturn($res2);
	}
}