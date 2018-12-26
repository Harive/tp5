<?php
	namespace app\admin\controller;

	use think\Controller;
	use think\Request;
	use think\DB;

	class First extends Controller{
		public function index(){
			return $this->fetch('index');
		}
	}