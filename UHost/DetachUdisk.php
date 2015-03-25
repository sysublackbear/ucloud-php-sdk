<?php
/**
 * DetachUdisk接口
 * ====================================================
 * 卸载某个已经挂载在指定UHost实例上的UDisk
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","DetachUdisk");
	$response->setParameter("UHostId","uhost-qs20fr");
	$response->setParameter("UDiskId","0b560b1d-f3b1-43de-a492-08875d79211b");

	$responseResult = $response->getResult();
	echo $responseResult;


