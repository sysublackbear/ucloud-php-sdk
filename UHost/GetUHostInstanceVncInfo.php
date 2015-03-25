<?php
/**
 * GetUHostInstanceVncInfo接口
 * ====================================================
 * 获取指定UHost实例的管理VNC配置详细信息。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","GetUHostInstanceVncInfo");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");

	$responseResult = $response->getResult();
	echo $responseResult;
