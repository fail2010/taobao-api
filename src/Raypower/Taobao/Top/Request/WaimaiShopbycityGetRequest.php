<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.waimai.shopbycity.get request
 * 
 * @author auto create
 * @since 1.0, 2014-06-25 17:04:23
 */
class WaimaiShopbycityGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.waimai.shopbycity.get";
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
