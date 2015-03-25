<?php
/**
 * DescribeSecurityGroupResource接口
 * ====================================================
 * 获取防火墙组所绑定资源的外网IP
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","DescribeSecurityGroupResource");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("GroupId","6583");

	$responseResult = $response->getResult();
	echo $responseResult;


