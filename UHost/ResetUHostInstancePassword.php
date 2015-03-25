<?php
/**
 * ResetUHostInstancePassword接口
 * ====================================================
 * 重置UHost实例的管理员密码。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","ResetUHostInstancePassword");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");
	//密码要base64编码
	$response->setParameter("Password",base64_encode('xxxxxxxx'));

	$responseResult = $response->getResult();
	echo $responseResult;
