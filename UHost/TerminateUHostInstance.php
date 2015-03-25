<?php
/**
 * TerminateUHostInstance接口
 * ====================================================
 * 删除指定数据中心的UHost实例。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","TerminateUHostInstance");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");

	$responseResult = $response->getResult();
	echo $responseResult;


