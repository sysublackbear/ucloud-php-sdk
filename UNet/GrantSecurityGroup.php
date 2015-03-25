<?php
/**
 * GrantSecurityGroup接口
 * ====================================================
 * 将防火墙应用到资源上
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","GrantSecurityGroup");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("GroupId","6583");
	$response->setParameter("ResourceType","UHost");
	$response->setParameter("ResourceId","uhost-w4d53b");

	$responseResult = $response->getResult();
	echo $responseResult;