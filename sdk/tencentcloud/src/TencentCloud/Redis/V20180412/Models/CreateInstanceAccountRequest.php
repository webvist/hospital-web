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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceAccount请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAccountName() 获取子账号名称
 * @method void setAccountName(string $AccountName) 设置子账号名称
 * @method string getAccountPassword() 获取子账号密码
 * @method void setAccountPassword(string $AccountPassword) 设置子账号密码
 * @method array getReadonlyPolicy() 获取路由策略：填写master或者replication，表示主节点或者从节点
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置路由策略：填写master或者replication，表示主节点或者从节点
 * @method string getPrivilege() 获取读写策略：填写r、w、rw，表示只读、只写、读写
 * @method void setPrivilege(string $Privilege) 设置读写策略：填写r、w、rw，表示只读、只写、读写
 * @method string getRemark() 获取子账号描述信息
 * @method void setRemark(string $Remark) 设置子账号描述信息
 */
class CreateInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 子账号名称
     */
    public $AccountName;

    /**
     * @var string 子账号密码
     */
    public $AccountPassword;

    /**
     * @var array 路由策略：填写master或者replication，表示主节点或者从节点
     */
    public $ReadonlyPolicy;

    /**
     * @var string 读写策略：填写r、w、rw，表示只读、只写、读写
     */
    public $Privilege;

    /**
     * @var string 子账号描述信息
     */
    public $Remark;

    /**
     * @param string $InstanceId 实例ID
     * @param string $AccountName 子账号名称
     * @param string $AccountPassword 子账号密码
     * @param array $ReadonlyPolicy 路由策略：填写master或者replication，表示主节点或者从节点
     * @param string $Privilege 读写策略：填写r、w、rw，表示只读、只写、读写
     * @param string $Remark 子账号描述信息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
