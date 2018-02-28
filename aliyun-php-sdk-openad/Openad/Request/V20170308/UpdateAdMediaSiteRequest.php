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

class UpdateAdMediaSiteRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "UpdateAdMediaSite");
        $this->setUriPattern("/mediaadsiteinfo/[Id]");
        $this->setMethod("PUT");
    }

    public function getId() {
      return $this->getPathParameters()["Id"];
    }

    public function setId($id) {
      $this->putPathParameter("Id", $id);
    }

    private $name;
    private $adSiteSize;
    private $adSiteTypeId;
    private $siteCateId;
    private $isCpt;
    private $imgPath;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        $this->queryParameters["name"]=$name;
    }

    public function getAdSiteSize() {
        return $this->adSiteSize;
    }

    public function setAdSiteSize($adSiteSize) {
        $this->adSiteSize = $adSiteSize;
        $this->queryParameters["ad_site_size"]=$adSiteSize;
    }

    public function getAdSiteTypeId() {
        return $this->adSiteTypeId;
    }

    public function setAdSiteTypeId($adSiteTypeId) {
        $this->adSiteTypeId = $adSiteTypeId;
        $this->queryParameters["ad_site_type_id"]=$adSiteTypeId;
    }

    public function getSiteCateId() {
        return $this->siteCateId;
    }

    public function setSiteCateId($siteCateId) {
        $this->siteCateId = $siteCateId;
        $this->queryParameters["site_cate_id"]=$siteCateId;
    }

    public function getIsCpt() {
        return $this->isCpt;
    }

    public function setIsCpt($isCpt) {
        $this->isCpt = $isCpt;
        $this->queryParameters["is_cpt"]=$isCpt;
    }

    public function getImgPath() {
        return $this->imgPath;
    }

    public function setImgPath($imgPath) {
        $this->imgPath = $imgPath;
        $this->queryParameters["img_path"]=$imgPath;
    }

}