<?php
// 本类由系统自动生成，仅供测试用途
/**
 * 默认执行的类
 */
class IndexAction extends Action {
    /**
     * 默认方法
     */
    public function index(){
		echo 'config name : '.C('name');
		echo '<br/>';
		echo 'config URL_MODEL : '.C('URL_MODEL');
		echo '<br/>';
		echo U('Index/check',array('id'=>1,'name'=>'xuetu'),'html',false,'localhost');
        echo '<br/>';

    }
    public function check(){
    	$id = $_GET['id'];
    	$name = $_GET['name'];
    	echo 'id is : '.$id;
    	echo '<br/>';
    	echo 'name is : '.$name;
    }
    /**
     * 测试自定义函数
     */
    public function test(){
        showHello();
    }
}