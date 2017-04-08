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
        $this->display();
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
        echo '<br/>';
        $array = array(1,6,7,2,3,4,5,8);
        dump($array);
    }
    /**
     * 测试加载视图
     */
    public function view(){
        $this->display();
        $this->display('index');
    }
    /**
     * 将数据发送到视图中
     */
    public function view_data(){
        $name = 'xuetu';
        $this->name=$name;
        $this->assign('sex','男');
        $this->assign('age',18);
        $date = date('Y-m-d H:i:s');
        $this->date=$date;
        $this->assign(array('id'=>1));
        $this->display();
    }
    /**
     * 测试使用模板引擎
     */
    public function template(){
        $this->assign('user',array(
            'id'=>2,
            'name'=>'白小纯',
            'now'=>time(),
            'age'=>21
        ));
        $this->assign('users',array(
            array(
                'id'=>1,
                'name'=>'雪兔',
                'now'=>time(),
                'age'=>18
            ),
            array(
                'id'=>2,
                'name'=>'白小纯',
                'now'=>time(),
                'age'=>21
            ),
            array(
                'id'=>3,
                'name'=>'王陆',
                'now'=>time(),
                'age'=>123
            )
        ));
        $this->now=time();
        $this->num=11;
        $this->name='小红';
        $this->display();
    }
    /**
     * 测试连接数据库
     */
    public function test_db(){
        $conn = new Model('user');
        $data = $conn->select();
        dump($data);
        $data = array(
            'id'=>4,
            'name'=>'雪兔',
        );
        M('user')->add($data);
    }
}