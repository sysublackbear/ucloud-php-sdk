#ucloud-php-sdk 使用方法

打开config.php文件进行公有信息的配置，如：

+ PublicKey
+ PrivateKey
+ BaseUrl（已设置默认值为http://api.ucloud.cn）

如果想要测试某个API的情况，选择对应名字的php文件，如想访问`DescribeUHostInstance`,打开DescribeUHostInstance.php文件，进行相关参数的设置：

``` 
$response->setParameter("Action","DescribeUHostInstance");
$response->setParameter("Region","cn-north-03");
```

设置你想要的参数。

电脑上安装好相关的php服务，访问 [http://localhost/ucloud-php-sdk/UHost/DescribeUHostInstance.php] 即可。

[http://localhost/ucloud-php-sdk/UHost/DescribeUHostInstance.php]: http://localhost/ucloud-php-sdk/UHost/DescribeUHostInstance.php

相关的API文档查看可以点击[这里]。

[这里]: http://docs.ucloud.cn/api/index.html  
