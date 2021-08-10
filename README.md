# Darts Framework 

## 概述

Darts Framework 是基于 Swoole 开发的一款高新能的微服务框架

## 环境要求

- php-7.2 或更高版本
- swoole-4.6 或更高版本

## 初次安装

- 请先将 Library类库 [dartswoole](https://github.com/jefferyjob/dartswoole) 置于 `darts` 项目的同级目录
- 然后执行 `composer update` 安装 `dartswoole` 扩展

## 目录简介

```text
app  
-----Controller-------------控制器     
-----Providers--------------服务提供者加载
-------------------RouteServerProvider--------路由服务提供者自定义扩展
-------------------RpcServerProvider----------RPC微服务提供者自定义扩展
-----Listeners--------------事件监听绑定
-------------------StartListener--------------swoole启动服务绑定的事件
-------------------StopListener---------------swoole停止服务绑定的事件
-----Rpc--------------------RPC微服务处理
bin  
-----darts------------------cli命令操作  
config  
-----app.php----------------框架主配置文件  
-----dartswoole.php---------dartswoole类型初始化加载配置文件  
-----event.php--------------事件绑定配置文件  
-----http_server.php--------swoole的http服务配置
-----consul.php-------------基于consul开发的rpc微服务
-----rpc_client.php---------项目作为客户端rpc服务配置
-----rpc_server.php---------项目作为服务端rpc服务配置
public  
-----index.php---------------项目入口文件  
route  
-----http.php----------------路由文件  
storage  
-----app---------------------缓存    
-----framework---------------缓存  
-----logs--------------------缓存    
```

## Http服务

基于 swoole 的 HTTP服务器 实现http协议的解析与处理。

## RPC微服务

### darts中微服务实现的两种方式： 

#### 1、Swoole->TCP

使用 swoole 的 TCP 协议使用 `config/rpc_client.php` 配置的rpc服务， 对 RpcServer 和 RpcClient 进行通信。  

**该服务的启动后，读取的配置如下：** 

RpcServer   ---read--->    config/rpc_server.php  
RpcClient   ---read--->    config/rpc_clien.php

#### 2、Swoole->Consul->TCP

RpcClient 首先从 consul 服务中读取健康服务的 ip 和端口，然后使用 swoole 的 TCP 协议和 RpcServer 进行通信。   

**该服务的启动后，读取的配置如下：**
RpcServer   ---read--->    config/rpc_server.php  
RpcClient   ---read--->    config/consul.php

#### 如何测试RPC

**#1测试**

由于 RPC 服务的实现，需要一个客户端（client）和一个服务端（server）。所以对于 darts 项目需要准备两份，一个充当客户端一个充当服务端。

- 重新复制一份此项目作为客户端项目
- 在 config/http_server.php 中修改 port 端口
- 在 config/rpc_server.php 中关闭 rpc 服务

**#2测试**

该服务的测试不需要进行两个客户端的配置，只需要请求 `route：consultest/rpc` 即可得到rpc效果。


## Question



