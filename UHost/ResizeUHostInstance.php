<?php
/**
 * ResizeUHostInstance接口
 * ====================================================
 * 修改指定UHost实例的资源配置，如CPU核心数，内存容量大小，磁盘空间大小等。
 * 修改配置注意事项： 1.修改配置前，请确认该实例已经被关闭。 2.修改磁盘空间大小后，请在启动后按照说明，进入操作系统进行操作。
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","ResizeUHostInstance");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");
	$response->setParameter("Memory","2048");

	$responseResult = $response->getResult();
	echo $responseResult;


