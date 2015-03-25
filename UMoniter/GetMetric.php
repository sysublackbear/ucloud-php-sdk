<?php
/**
 * GetMetric接口
 * ====================================================
 * 获取监控数据
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","GetMetric");
	$response->setParameter("Region","cn-south-01");
	
	/**
	 *MetricName可使用如下内容
	 *uhost
	 *
	 *Name	Description
	 *NetworkIn	 
	 *NetworkOut	 
	 *CPUUtilization	 
	 *IORead	 
	 *IOWrite	 
	 *DiskReadOps	 
	 *NICIn	 
	 *NICOut	 
	 *MemUsage	 
	 *DataSpaceUsage	 
	 *RootSpaceUsage	 
	 *ReadonlyDiskCount	 
	 *RunnableProcessCount	 
	 *BlockProcessCount	 
	 *
	 *udb
	 *Name	Description
	 *CPUUtilization	 
	 *MemUsage	 
	 *QPS	 
	 *ExpensiveQuery	 
	 *
	 *ulb
	 *Name	Description
	 *NetworkOut	 
	 *TotalNetworkOut	 
	 *CurrentConnections	 
	 *
	 *umem
	 *Name	Description
	 *Usage	 
	 *QPS	 
	 *InstanceCount	 
	*/
	$response->setParameter("MetricName.0","NetworkOut");
	$response->setParameter("MetricName.1","TotalNetworkOut");

	$response->setParameter("ResourceId","ulb-kix4tp");
	$response->setParameter("ResourceType","ulb");
	$responseResult = $response->getResult();
	echo $responseResult;