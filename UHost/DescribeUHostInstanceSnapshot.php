<?php
/**
 * DescribeUHostInstanceSnapshot接口
 * ====================================================
 * 获取已经存在的UHost实例的存储快照列表。
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


