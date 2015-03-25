<?php
/**
 * CreateUHostInstanceSnapshot接口
 * ====================================================
 * 对指定UHost实例制作数据快照。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","CreateUHostInstanceSnapshot");
	$response->setParameter("Region","cn-north-01");
	$response->setParameter("UHostId","uhost-qs20fr");

	$responseResult = $response->getResult();
	echo $responseResult;


