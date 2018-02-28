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

class CheckAdCreativeRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "CheckAdCreative");
        $this->setUriPattern("/adcreative/dsp/check/");
        $this->setMethod("POST");
    }

    private $ids;
    private $pass;
    private $reason;

    public function getIds() {
        return $this->ids;
    }

    public function setIds($ids) {
        $this->ids = $ids;
        $this->queryParameters["ids"]=$ids;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
        $this->queryParameters["pass"]=$pass;
    }

    public function getReason() {
        return $this->reason;
    }

    public function setReason($reason) {
        $this->reason = $reason;
        $this->queryParameters["reason"]=$reason;
    }

}