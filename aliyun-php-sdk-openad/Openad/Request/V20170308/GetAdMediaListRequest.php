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

class GetAdMediaListRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "GetAdMediaList");
        $this->setUriPattern("/mediainfo/dsp/query/");
        $this->setMethod("GET");
    }

    private $page;
    private $size;
    private $queryStr;
    private $mediaTypeId;
    private $dict;
    private $siteCateId;

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

    public function getQueryStr() {
        return $this->queryStr;
    }

    public function setQueryStr($queryStr) {
        $this->queryStr = $queryStr;
        $this->queryParameters["query_str"]=$queryStr;
    }

    public function getMediaTypeId() {
        return $this->mediaTypeId;
    }

    public function setMediaTypeId($mediaTypeId) {
        $this->mediaTypeId = $mediaTypeId;
        $this->queryParameters["media_type_id"]=$mediaTypeId;
    }

    public function getDict() {
        return $this->dict;
    }

    public function setDict($dict) {
        $this->dict = $dict;
        $this->queryParameters["dict"]=$dict;
    }

    public function getSiteCateId() {
        return $this->siteCateId;
    }

    public function setSiteCateId($siteCateId) {
        $this->siteCateId = $siteCateId;
        $this->queryParameters["site_cate_id"]=$siteCateId;
    }

}