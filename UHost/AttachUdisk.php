<?php
/**
 * AttachUdisk接口
 * ====================================================
 * 将一个可用的UDisk挂载到某台主机上，当UDisk挂载成功后，还需要在主机内部进行文件系统操作。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","AttachUdisk");
	$response->setParameter("UHostId","uhost-qs20fr");
	$response->setParameter("UDiskId","0b560b1d-f3b1-43de-a492-08875d79211b");

	$responseResult = $response->getResult();
	echo $responseResult;


