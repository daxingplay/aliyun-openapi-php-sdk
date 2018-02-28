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

class CreateAdMediaRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "CreateAdMedia");
        $this->setUriPattern("/mediainfo");
        $this->setMethod("POST");
    }

    private $mediaName;
    private $mediaTypeId;
    private $mediaDomain;
    private $mediaPv;
    private $ratio;
    private $cpaCpmRatio;
    private $cpiCpmRatio;
    private $mediaAddress;
    private $mediaImgPath;

    public function getMediaName() {
        return $this->mediaName;
    }

    public function setMediaName($mediaName) {
        $this->mediaName = $mediaName;
        $this->queryParameters["media_name"]=$mediaName;
    }

    public function getMediaTypeId() {
        return $this->mediaTypeId;
    }

    public function setMediaTypeId($mediaTypeId) {
        $this->mediaTypeId = $mediaTypeId;
        $this->queryParameters["media_type_id"]=$mediaTypeId;
    }

    public function getMediaDomain() {
        return $this->mediaDomain;
    }

    public function setMediaDomain($mediaDomain) {
        $this->mediaDomain = $mediaDomain;
        $this->queryParameters["media_domain"]=$mediaDomain;
    }

    public function getMediaPv() {
        return $this->mediaPv;
    }

    public function setMediaPv($mediaPv) {
        $this->mediaPv = $mediaPv;
        $this->queryParameters["media_pv"]=$mediaPv;
    }

    public function getRatio() {
        return $this->ratio;
    }

    public function setRatio($ratio) {
        $this->ratio = $ratio;
        $this->queryParameters["ratio"]=$ratio;
    }

    public function getCpaCpmRatio() {
        return $this->cpaCpmRatio;
    }

    public function setCpaCpmRatio($cpaCpmRatio) {
        $this->cpaCpmRatio = $cpaCpmRatio;
        $this->queryParameters["cpa_cpm_ratio"]=$cpaCpmRatio;
    }

    public function getCpiCpmRatio() {
        return $this->cpiCpmRatio;
    }

    public function setCpiCpmRatio($cpiCpmRatio) {
        $this->cpiCpmRatio = $cpiCpmRatio;
        $this->queryParameters["cpi_cpm_ratio"]=$cpiCpmRatio;
    }

    public function getMediaAddress() {
        return $this->mediaAddress;
    }

    public function setMediaAddress($mediaAddress) {
        $this->mediaAddress = $mediaAddress;
        $this->queryParameters["media_ address"]=$mediaAddress;
    }

    public function getMediaImgPath() {
        return $this->mediaImgPath;
    }

    public function setMediaImgPath($mediaImgPath) {
        $this->mediaImgPath = $mediaImgPath;
        $this->queryParameters["media_img_path"]=$mediaImgPath;
    }

}