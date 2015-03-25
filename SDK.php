<?php
/**
 * PHP SDK for UCloud API
 * =====================================================
 *  @author sysublackbear
 *  @copyright 2015 SYSU
 *  @license http://sysublackbear.github.io/
 */
 
require_once("../config.php");
require_once("../SDKRuntimeException.php");

/**
 * UCloud接口的基类
 * 包含一些工具的方法
 * @version 1.0
 */
class UCloudAPIClient {

	/*
	 * 用户公钥
	 */
	public $publicKey;

	/*
	 * 用户私钥
	 */
	public $privateKey;

	/*
	 * 基地址
	 */
	public $baseUrl;

	/*
	 * 数字签名
	 */
	public $signature;

	/*
	 * 请求参数，类型为关联数组
	 */
	public $parameters;

	/*
	 * 请求参数的字符串
	 */
	public $requestString;

	/*
	 * 返回结果
	 */
	public $result;
	
	/**
	 * construct UCloudAPIClient object
	 */
	function __construct() {
		$this->parameters['PublicKey'] = SDKConfig::PublicKey;
		$this->publicKey = SDKConfig::PublicKey;
		$this->privateKey = SDKConfig::PrivateKey;
		$this->baseUrl = SDKConfig::BaseUrl;
	}

	/**
	 * 作用：设置请求参数
	 * @param $key —— 键
	 * @param $value —— 值
	 */
	function setParameter($key, $value) {
		$this->parameters[trim($key)] = trim($value);
	}

	/**
	 * 作用：生成签名算法
	 * @param $privateKey —— 私钥
	 * @param $params —— 参数列表
	 */
	function verfyAc($privateKey, $params) {
		
		//参数串排序
		ksort($params);

		//打印参数列表
		//print_r($params);
		
		$paramsData = "";

		foreach($params as $key => $value) {
			$paramsData .= $key;
			$paramsData .= $value;
		}

		$paramsData .= $privateKey;

		//通过sha1算法生成Signature值
		return sha1($paramsData);
	}

	/**
	 * 	作用：生成请求字符串
	 *  @param $url —— 接口url
	 *  @param $params —— 请求参数数组
	 */
	function makeRequestUrl($url,$params) {
		$result = "?";

		//参数串排序
		ksort($params);

		$i = 0;

		//拼接get请求参数
		foreach ($params as $key => $value) {
			if($i == 0) {
				$result .= $key . "=" . $value;
			}
			else {
				$result .= "&" . $key . "=" . $value;
			}
			$i++;
		}

		//获取数字签名
		$signature = $this->verfyAc($this->privateKey,$params);

		//附在最后
		$result .= "&Signature=" . $signature;
		$result = $url . $result;
		return $result;
	}

	/**
	 * 	作用：以get方式提交请求参数到对应的接口url
	 *  @param $url —— 接口url
	 *  @param $second —— 超时时间（默认30秒)
	 */
	function getCurl($url,$second=30)
	{		
        //初始化curl        
       	$ch = curl_init();
		//超时时间
		curl_setopt($ch,CURLOPT_TIMEOUT,$second);
        //这里设置代理，如果有的话
        //curl_setopt($ch,CURLOPT_PROXY, 'xxx.xxx.xxx.xxxx');
        //curl_setopt($ch,CURLOPT_PROXYPORT, xxxx);
        curl_setopt($ch,CURLOPT_URL, $url);

		//设置header
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

		//运行curl
        $data = curl_exec($ch);
		//返回结果
		if($data)
		{
			curl_close($ch);
			return $data;
		}
		else 
		{ 
			$error = curl_errno($ch);
			echo "curl出错，错误码:$error"."<br>"; 
			curl_close($ch);
			return false;
		}
	}

	/**
	 * 作用：获取结果
	 * 返回JSON对象
	 */
	function getResult() {

		$url = $this->makeRequestUrl($this->baseUrl,$this->parameters);
		$this->result = $this->getCurl($url);
		return $this->result;
	}
}