<?php

/**
 *teitterModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class TwitterModel extends BaseModel
{

	/*
	*微语查询
	*/

	public function sel(){

		$arr=$this->db->sql("select * from twitter inner join user on twitter.author = user.id order by date desc");
		return $arr;

	}
	
	/*
	*微语添加
	*/

	public function add(){

		$img=$_FILES['img'];
		$c_path = "./common/image/".md5($img['name']).substr($img['name'],strrpos($img['name'],"."));
    	if(move_uploaded_file($_FILES['img']['tmp_name'], $c_path)){
    		$img = './common/image/'.md5($img['name']).substr($img['name'],strrpos($img['name'],"."));
    	}else{
    		$img='';
    	}
    	$datetime=time();
    	//print_r($img);die;
    	$id=$_SESSION['user']['id'];
		$data=array(
    		'content'=>$_POST['content'],
    		'imgs'=>$img,
    		'date'=>$datetime,
    		'author'=>$id,
    		);
		$re=$this->db->insert('twitter',$data);
		return $re;

	}

	/*
	*微语个数
	*/

	public function count(){

		$arr=$this->db->sql("select count(*) as aa from twitter");
		return $arr;

	}

	/*
	*回复添加
	*/

	public function add_reply($data,$id){

		$re=$this->db->insert('reply',$data);
		$arr=$this->db->sql("select * from twitter where t_id=$id");
		$replynum=$arr['0']['replynum']+1;
		$r=$this->db->Up('twitter',array('t_id'=>$id),array('replynum'=>$replynum));
		return $re;

	}

	/*
	*回复查询
	*/

	public function sel_reply(){

		$arr=$this->db->sql("select * from twitter inner join user on twitter.author = user.id order by date desc");
		foreach ($arr as $k => $v) {
			$re=$arr[$k]['content']=$this->change($v['content']);
			$t_id=$v['t_id'];
			$arr[$k]['reply']=$this->db->sql("select * from reply where tid=$t_id and hide='n'");
		}
		return $arr;	

	}

	/*
	*微语删除
	*/

	public function deletes($id){

		$id=$_GET['t_id'];
		$re=$this->db->del('twitter',array('t_id'=>$id));
		return $re;	

	}

	/*
	*微语回复删除
	*/

	public function delete_reply($id){
		
		$arr=$this->db->sql("select * from reply where id=$id");
		$t_id=$arr['0']['tid'];
		$row=$this->db->sql("select * from twitter where t_id=$t_id");
		$re=$this->db->del('reply',array('id'=>$id));
		$replynum=$row['replynum']-1;
		$r=$this->db->Up('twitter',array('t_id'=>$t_id),array('replynum'=>$replynum));
		return $re;	

	}

	/*
	*微语回复隐藏
	*/

	public function hide_reply($id){
		
		$arr=$this->db->sql("select * from reply where id=$id");
		$t_id=$arr['0']['tid'];
		$row=$this->db->sql("select * from twitter where t_id=$t_id");
		$re=$this->db->Up('reply',array('id'=>$id),array('hide'=>'y'));
		$replynum=$row['0']['replynum']-1;
		$r=$this->db->Up('twitter',array('t_id'=>$t_id),array('replynum'=>$replynum));
		return $re;	

	}

	/*
	*表情
	*/

	public function change($str)

	{
		$str = str_replace("[耶]","<img src='./common/editor/plugins/emoticons/images/0.gif'>",$str);
		$str = str_replace("[呵呵]","<img src='./common/editor/plugins/emoticons/images/1.gif'>",$str);
		$str = str_replace("[悲伤]","<img src='./common/editor/plugins/emoticons/images/2.gif'>",$str);
		$str = str_replace("[抓狂]","<img src='./common/editor/plugins/emoticons/images/3.gif'>",$str);
		$str = str_replace("[衰]","<img src='./common/editor/plugins/emoticons/images/4.gif'>",$str);
		$str = str_replace("[花心]","<img src='./common/editor/plugins/emoticons/images/5.gif'>",$str);
		$str = str_replace("[哼]","<img src='./common/editor/plugins/emoticons/images/6.gif'>",$str);
		$str = str_replace("[泪]","<img src='./common/editor/plugins/emoticons/images/7.gif'>",$str);
		$str = str_replace("[害羞]","<img src='./common/editor/plugins/emoticons/images/8.gif'>",$str);
		$str = str_replace("[酷]","<img src='./common/editor/plugins/emoticons/images/9.gif'>",$str);
		$str = str_replace("[晕]","<img src='./common/editor/plugins/emoticons/images/10.gif'>",$str);
		$str = str_replace("[挤眼]","<img src='./common/editor/plugins/emoticons/images/11.gif'>",$str);
		$str = str_replace("[鬼脸]","<img src='./common/editor/plugins/emoticons/images/12.gif'>",$str);
		$str = str_replace("[汗]","<img src='./common/editor/plugins/emoticons/images/13.gif'>",$str);
		$str = str_replace("[吃惊]","<img src='./common/editor/plugins/emoticons/images/14.gif'>",$str);
		$str = str_replace("[发呆]","<img src='./common/editor/plugins/emoticons/images/15.gif'>",$str);
		$str = str_replace("[闭嘴]","<img src='./common/editor/plugins/emoticons/images/16.gif'>",$str);
		$str = str_replace("[撇嘴]","<img src='./common/editor/plugins/emoticons/images/17.gif'>",$str);
		$str = str_replace("[疑问]","<img src='./common/editor/plugins/emoticons/images/18.gif'>",$str);
		$str = str_replace("[睡觉]","<img src='./common/editor/plugins/emoticons/images/19.gif'>",$str);
		$str = str_replace("[NO]","<img src='./common/editor/plugins/emoticons/images/20.gif'>",$str);
		$str = str_replace("[大哭]","<img src='./common/editor/plugins/emoticons/images/21.gif'>",$str);
		$str = str_replace("[爱你]","<img src='./common/editor/plugins/emoticons/images/22.gif'>",$str);
		$str = str_replace("[嘻嘻]","<img src='./common/editor/plugins/emoticons/images/23.gif'>",$str);
		$str = str_replace("[生病]","<img src='./common/editor/plugins/emoticons/images/24.gif'>",$str);
		$str = str_replace("[偷笑]","<img src='./common/editor/plugins/emoticons/images/25.gif'>",$str);
		$str = str_replace("[思考]","<img src='./common/editor/plugins/emoticons/images/26.gif'>",$str);
		$str = str_replace("[玫瑰]","<img src='./common/editor/plugins/emoticons/images/27.gif'>",$str);
		$str = str_replace("[心]","<img src='./common/editor/plugins/emoticons/images/28.gif'>",$str);
		$str = str_replace("[伤心]","<img src='./common/editor/plugins/emoticons/images/29.gif'>",$str);
		$str = str_replace("[咖啡]","<img src='./common/editor/plugins/emoticons/images/30.gif'>",$str);
		$str = str_replace("[音乐]","<img src='./common/editor/plugins/emoticons/images/31.gif'>",$str);
		$str = str_replace("[下雨]","<img src='./common/editor/plugins/emoticons/images/32.gif'>",$str);
		$str = str_replace("[晴天]","<img src='./common/editor/plugins/emoticons/images/33.gif'>",$str);
		$str = str_replace("[星星]","<img src='./common/editor/plugins/emoticons/images/34.gif'>",$str);
		$str = str_replace("[月亮]","<img src='./common/editor/plugins/emoticons/images/35.gif'>",$str);
		return $str;
		
	}	
	

}