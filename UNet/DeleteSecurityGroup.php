<?php
/**
 * DeleteSecurityGroup接口
 * ====================================================
 * 删除防火墙
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","DeleteSecurityGroup");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("GroupId","6583");

	$responseResult = $response->getResult();
	echo $responseResult;