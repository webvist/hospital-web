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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskTemplates请求参数结构体
 *
 * @method array getTaskTemplateIds() 获取任务模板ID列表，与Filters参数不能同时指定。
 * @method void setTaskTemplateIds(array $TaskTemplateIds) 设置任务模板ID列表，与Filters参数不能同时指定。
 * @method array getFilters() 获取过滤条件
<li> task-template-name - String - 是否必填：否 -（过滤条件）按照任务模板名称过滤。</li>
与TaskTemplateIds参数不能同时指定。
 * @method void setFilters(array $Filters) 设置过滤条件
<li> task-template-name - String - 是否必填：否 -（过滤条件）按照任务模板名称过滤。</li>
与TaskTemplateIds参数不能同时指定。
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回数量
 * @method void setLimit(integer $Limit) 设置返回数量
 */
class DescribeTaskTemplatesRequest extends AbstractModel
{
    /**
     * @var array 任务模板ID列表，与Filters参数不能同时指定。
     */
    public $TaskTemplateIds;

    /**
     * @var array 过滤条件
<li> task-template-name - String - 是否必填：否 -（过滤条件）按照任务模板名称过滤。</li>
与TaskTemplateIds参数不能同时指定。
     */
    public $Filters;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回数量
     */
    public $Limit;

    /**
     * @param array $TaskTemplateIds 任务模板ID列表，与Filters参数不能同时指定。
     * @param array $Filters 过滤条件
<li> task-template-name - String - 是否必填：否 -（过滤条件）按照任务模板名称过滤。</li>
与TaskTemplateIds参数不能同时指定。
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回数量
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
        if (array_key_exists("TaskTemplateIds",$param) and $param["TaskTemplateIds"] !== null) {
            $this->TaskTemplateIds = $param["TaskTemplateIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
