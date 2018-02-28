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

class GetAdDefaultCreativeListRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "GetAdDefaultCreativeList");
        $this->setUriPattern("/default_creative/dsp/list/");
        $this->setMethod("GET");
    }

    private $queryStr;
    private $page;
    private $size;

    public function getQueryStr() {
        return $this->queryStr;
    }

    public function setQueryStr($queryStr) {
        $this->queryStr = $queryStr;
        $this->queryParameters["query_str"]=$queryStr;
    }

    public function getPage() {
        return $this->page;
    }

    public function setPage($page) {
        $this->page = $page;
        $this->queryParameters["page"]=$page;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
        $this->queryParameters["size"]=$size;
    }
    
}