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

class UpdateAdGroupRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "UpdateAdGroup");
        $this->setUriPattern("/adgroup/[Id]");
        $this->setMethod("PUT");
    }

    public function getId() {
        return $this->getPathParameters()["Id"];
    }

    public function setId($id) {
       $this->putPathParameter("Id", $id);
    }

    public function setAdvId($advId) {
        $this->addHeader('ORG-ADID', $advId);
    }

    private $adPlanId;
    private $adGroupName;
    private $adBidType;
    private $adBidPrice;
    private $adSourceType;
    private $mobileSourceType;
    private $adServerType;
    private $mediaType;
    private $media;
    private $viewTypeIds;
    private $keywords;
    private $area;
    private $os;
    private $device;
    private $network;
    private $otGroup;
    private $adGroupStatus;
    private $groupType;
    private $dailyShowLimit;
    private $pids;

    public function getAdPlanId() {
        return $this->adPlanId;
    }

    public function setAdPlanId($adPlanId) {
        $this->adPlanId = $adPlanId;
        $this->queryParameters["ad_plan_id"]=$adPlanId;
    }

    public function getAdGroupName() {
        return $this->adGroupName;
    }

    public function setAdGroupName($adGroupName) {
        $this->adGroupName = $adGroupName;
        $this->queryParameters["ad_group_name"]=$adGroupName;
    }

    public function getAdBidType() {
        return $this->adBidType;
    }

    public function setAdBidType($adBidType) {
        $this->adBidType = $adBidType;
        $this->queryParameters["ad_bid_type"]=$adBidType;
    }

    public function getAdBidPrice() {
        return $this->adBidPrice;
    }

    public function setAdBidPrice($adBidPrice) {
        $this->adBidPrice = $adBidPrice;
        $this->queryParameters["ad_bid_price"]=$adBidPrice;
    }

    public function getAdSourceType() {
        return $this->adSourceType;
    }

    public function setAdSourceType($adSourceType) {
        $this->adSourceType = $adSourceType;
        $this->queryParameters["ad_source_type"]=$adSourceType;
    }

    public function getMobileSourceType() {
        return $this->mobileSourceType;
    }

    public function setMobileSourceType($mobileSourceType) {
        $this->mobileSourceType = $mobileSourceType;
        $this->queryParameters["mobile_source_type"]=$mobileSourceType;
    }

    public function getAdServerType() {
        return $this->adServerType;
    }

    public function setAdServerType($adServerType) {
        $this->adServerType = $adServerType;
        $this->queryParameters["ad_server_type"]=$adServerType;
    }

    public function getMediaType() {
        return $this->mediaType;
    }

    public function setMediaType($mediaType) {
        $this->mediaType = $mediaType;
        $this->queryParameters["media_type"]=$mediaType;
    }

    public function getMedia() {
        return $this->media;
    }

    public function setMedia($media) {
        $this->media = $media;
        $this->queryParameters["media"]=$media;
    }

    public function getViewTypeIds() {
        return $this->viewTypeIds;
    }

    public function setViewTypeIds($viewTypeIds) {
        $this->viewTypeIds = $viewTypeIds;
        $this->queryParameters["view_type_ids"]=$viewTypeIds;
    }

    public function getKeywords() {
        return $this->keywords;
    }

    public function setKeywords($keywords) {
        $this->keywords = $keywords;
        $this->queryParameters["keywords"]=$keywords;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
        $this->queryParameters["area"]=$area;
    }

    public function getOs() {
        return $this->os;
    }

    public function setOs($os) {
        $this->os = $os;
        $this->queryParameters["os"]=$os;
    }

    public function getDevice() {
        return $this->device;
    }

    public function setDevice($device) {
        $this->device = $device;
        $this->queryParameters["device"]=$device;
    }

    public function getNetwork() {
        return $this->network;
    }

    public function setNetwork($network) {
        $this->network = $network;
        $this->queryParameters["network"]=$network;
    }

    public function getOtGroup() {
        return $this->otGroup;
    }

    public function setOtGroup($otGroup) {
        $this->otGroup = $otGroup;
        $this->queryParameters["ot_group"]=$otGroup;
    }

    public function getAdGroupStatus() {
        return $this->adGroupStatus;
    }

    public function setAdGroupStatus($adGroupStatus) {
        $this->adGroupStatus = $adGroupStatus;
        $this->queryParameters["ad_group_status"]=$adGroupStatus;
    }

    public function getGroupType() {
        return $this->groupType;
    }

    public function setGroupType($groupType) {
        $this->groupType = $groupType;
        $this->queryParameters["group_type"]=$groupType;
    }

    public function getDailyShowLimit() {
        return $this->dailyShowLimit;
    }

    public function setDailyShowLimit($dailyShowLimit) {
        $this->dailyShowLimit = $dailyShowLimit;
        $this->queryParameters["daily_show_limit"]=$dailyShowLimit;
    }

    public function getPids() {
        return $this->pids;
    }

    public function setPids($pids) {
        $this->pids = $pids;
        $this->queryParameters["pids"]=$pids;
    }

}