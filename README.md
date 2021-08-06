# Darts Framework 

## 概述

Darts Framework 是基于 Swoole 开发的一款高新能的微服务框架

## 目录简介

```text
app  
----------Controller--------------控制器     
----------Providers---------------引擎加载    
bin  
----------darts-------------------cli命令操作  
config  
----------app.php-----------------框架主配置文件  
----------dartswoole.php----------dartswoole类型初始化加载配置文件  
----------event.php---------------事件绑定配置文件  
----------http_server.php---------swoole的http服务配置 
----------rpc_client.php----------项目作为客户端rpc服务配置
----------rpc_server.php----------项目作为服务端rpc服务配置
public  
----------index.php---------------项目入口文件  
route  
----------http.php----------------路由文件  
storage  
----------app---------------------缓存    
----------framework---------------缓存  
----------logs--------------------缓存    
vendor  
----------xxxxxx------------------扩展  
```

## 初次安装

- 请先将Library类库 [dartswoole](https://github.com/jefferyjob/dartswoole) 置于 darts 项目的同级目录
- 然后执行 composer update 安装 dartswoole 扩展

## Question

### 如何测试RPC服务

- 重新复制一份此项目作为客户端项目
- 在 config/http_server.php 中修改 port 端口
- 在 config/rpc_server.php 中关闭 rpc 服务