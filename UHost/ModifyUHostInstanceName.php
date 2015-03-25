<?php
/**
 * ModifyUHostInstanceName接口
 * ====================================================
 * 修改指定UHost实例名称，需要给出数据中心，UHostId，及新的实例名称。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","ModifyUHostInstanceName");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");
	$response->setParameter("Name","Test");

	$responseResult = $response->getResult();
	echo $responseResult;
