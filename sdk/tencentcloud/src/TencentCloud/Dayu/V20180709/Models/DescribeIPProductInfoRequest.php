<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIPProductInfo请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgp表示独享包；bgp-multip表示共享包）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgp表示独享包；bgp-multip表示共享包）
 * @method array getIpList() 获取IP列表
 * @method void setIpList(array $IpList) 设置IP列表
 */
class DescribeIPProductInfoRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgp表示独享包；bgp-multip表示共享包）
     */
    public $Business;

    /**
     * @var array IP列表
     */
    public $IpList;

    /**
     * @param string $Business 大禹子产品代号（bgp表示独享包；bgp-multip表示共享包）
     * @param array $IpList IP列表
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
