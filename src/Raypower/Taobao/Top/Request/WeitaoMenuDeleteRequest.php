<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.weitao.menu.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-09-26 12:58:31
 */
class WeitaoMenuDeleteRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.weitao.menu.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
