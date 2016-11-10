<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comment_model extends MY_Model {
	
	function getTopComment($nid, $type){
		$comment= $this->getComment($nid, $type);
		if(!empty($comment)){
			foreach($comment as $row){
				$row->reply= $this->getReply($row->id);
			}
		}
		return $comment;
	}
	
	function getLoadComment($nid, $type, $point, $limit, $startRow, $pageNum= 1){
		$comment= $this->getComment($nid, $type, $point, $limit, $startRow, $pageNum);
		if(!empty($comment)){
			foreach($comment as $row){
				$row->reply= $this->getReply($row->id);
			}
		}
		return $comment;		
	}
	
	function getCount($nid, $type){
		$this->db->select("count(*) as count");
		$this->db->from(COMMENT_TB." AS comment");
		$this->db->join(USER_TB." AS user", "user.id = comment.uid");
		$this->db->where("comment.nid = '{$nid}' AND comment.type = '{$type}' AND comment.pid = 0 AND comment.status = 1 AND user.status = 1");
		$query= $this->db->get();	
		return ($query->row()) ? $query->row()->count : FALSE;		
	}
	
	function getComment($nid, $type, $point= 0, $limit= -1, $startRow= -1, $pageNum= 1){
		$this->db->select("comment.*, user.fullname, user.username");
		$this->db->from(COMMENT_TB." AS comment");
		$this->db->join(USER_TB." AS user", "user.id = comment.uid");
		$this->db->where("comment.nid = '{$nid}' AND comment.type = '{$type}' AND comment.pid = 0 AND comment.status = 1 AND user.status = 1");
		if(empty($point)){
			$this->db->limit(10);
		}else{
			$this->db->limit($limit, $startRow);
/* 			if($pageNum == 1){
				//$this->db->where("comment.id >= '{$point}'");
				$this->db->limit($limit, $startRow);
			}else{
				//$this->db->where("comment.id < '{$point}'");
				$this->db->limit($limit, $startRow);
			} */
		}
		$this->db->order_by("created", "desc");
		$query= $this->db->get();	
		//pr(last_query(),1);
		return ($query->result()) ? $query->result() : FALSE;
	}
	
	function getReply($pid){
		$this->db->select("comment.*, user.fullname, user.username");
		$this->db->from(COMMENT_TB." AS comment");
		$this->db->join(USER_TB." AS user", "user.id = comment.uid");
		$this->db->where("comment.pid = '{$pid}' AND comment.status = 1 AND user.status = 1");
		$this->db->order_by("created", "asc");
		$query= $this->db->get();	
		return ($query->result()) ? $query->result() : FALSE;		
	}
}
?>