<?php
/**
 * DescribeUHostInstance接口
 * ====================================================
 * 获取主机或主机列表信息，并可根据数据中心，主机ID等参数进行过滤。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","DescribeUHostInstance");
	$response->setParameter("Region","cn-north-03");

	$responseResult = $response->getResult();
	echo $responseResult;


