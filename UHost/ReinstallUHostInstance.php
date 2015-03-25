<?php
/**
 * ReinstallUHostInstance接口
 * ====================================================
 * 重新安装指定UHost实例的操作系统
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","ReinstallUHostInstance");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");
	$response->setParameter("Password",base64_encode('xxxxxxxx'));

	$responseResult = $response->getResult();
	echo $responseResult;


