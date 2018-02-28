<?php
/*
  * Licensed to the Apache Software Foundation (ASF) under one
  * or more contributor license agreements.  See the NOTICE file
  * distributed with this work for additional information
  * regarding copyright ownership.  The ASF licenses this file
  * to you under the Apache License, Version 2.0 (the
  * "License"); you may not use this file except in compliance
  * with the License.  You may obtain a copy of the License at
  *
  *     http://www.apache.org/licenses/LICENSE-2.0
  *
  * Unless required by applicable law or agreed to in writing,
  * software distributed under the License is distributed on an
  * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
  * KIND, either express or implied.  See the License for the
  * specific language governing permissions and limitations
  * under the License.
  */
namespace Openad\Request\V20170308;

class RefundForAdvRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "RefundForAdv");
        $this->setUriPattern("/account/refund/");
        $this->setMethod("POST");
    }

    private $advId;
    private $money;

    public function getAdvId() {
        return $this->advId;
    }

    public function setAdvId($advId) {
        $this->advId = $advId;
        $this->queryParameters["adv_id"]=$advId;
    }

    public function getMoney() {
        return $this->money;
    }

    public function setMoney($money) {
        $this->money = $money;
        $this->queryParameters["money"]=$money;
    }

}