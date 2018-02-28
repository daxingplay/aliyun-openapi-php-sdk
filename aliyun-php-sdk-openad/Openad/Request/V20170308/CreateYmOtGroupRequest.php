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

class CreateYmOtGroupRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "CreateYmOtGroup");
        $this->setUriPattern("/otgroup/ym/createcrowd/");
        $this->setMethod("POST");
    }

    private $tags;
    private $crowdName;
    private $avId;

    public function getTags() {
        return $this->tags;
    }

    public function setTags($tags) {
        $this->tags = $tags;
        $this->queryParameters["tags"]=$tags;
    }

    public function getCrowdName() {
        return $this->crowdName;
    }

    public function setCrowdName($crowdName) {
        $this->crowdName = $crowdName;
        $this->queryParameters["crowd_name"]=$crowdName;
    }

    public function getAvId() {
        return $this->avId;
    }

    public function setAvId($avId) {
        $this->avId = $avId;
        $this->queryParameters["av_id"]=$avId;
    }

}