<?php
/**
 * CreateUHostInstance接口
 * ====================================================
 * 指定数据中心，根据资源使用量创建指定数量的UHost实例。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","CreateUHostInstanceResposne");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("ImageId","uimage-qiut5g");
	//密码要base64编码
	$response->setParameter("LoginMode","Password");
	$response->setParameter("Password",base64_encode('xxxxxxxx'));

	$responseResult = $response->getResult();
	echo $responseResult;


