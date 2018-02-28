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

class CreateAdCreativeRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "CreateAdCreative");
        $this->setUriPattern("/adcreative");
        $this->setMethod("POST");
    }

    private $adGroupId;
    private $creativeName;
    private $creativeDesc;
    private $imgPath;
    private $imgSize;
    private $imageType;
    private $destUrl;
    private $category;
    private $wechatUrl;
    private $creativeType;
    private $animationType;
    private $animationUrl;
    private $animationWidth;
    private $animationHeight;
    private $animationMonitorUrl;
    private $monitorUrl;
    private $clickMonitorUrl;
    private $creativeStatus;
    private $userDefine;

    public function getAdGroupId() {
        return $this->adGroupId;
    }

    public function setAdGroupId($adGroupId) {
        $this->adGroupId = $adGroupId;
        $this->queryParameters["ad_group_id"]=$adGroupId;
    }

    public function getCreativeName() {
        return $this->creativeName;
    }

    public function setCreativeName($creativeName) {
        $this->creativeName = $creativeName;
        $this->queryParameters["creative_name"]=$creativeName;
    }

    public function getCreativeDesc() {
        return $this->creativeDesc;
    }

    public function setCreativeDesc($creativeDesc) {
        $this->creativeDesc = $creativeDesc;
        $this->queryParameters["creative_desc"]=$creativeDesc;
    }

    public function getImgPath() {
        return $this->imgPath;
    }

    public function setImgPath($imgPath) {
        $this->imgPath = $imgPath;
        $this->queryParameters["img_path"]=$imgPath;
    }

    public function getImgSize() {
        return $this->imgSize;
    }

    public function setImgSize($imgSize) {
        $this->imgSize = $imgSize;
        $this->queryParameters["img_size"]=$imgSize;
    }

    public function getImageType() {
        return $this->imageType;
    }

    public function setImageType($imageType) {
        $this->imageType = $imageType;
        $this->queryParameters["image_type"]=$imageType;
    }

    public function getDestUrl() {
        return $this->destUrl;
    }

    public function setDestUrl($destUrl) {
        $this->destUrl = $destUrl;
        $this->queryParameters["dest_url"]=$destUrl;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
        $this->queryParameters["category"]=$category;
    }

    public function getWechatUrl() {
        return $this->wechatUrl;
    }

    public function setWechatUrl($wechatUrl) {
        $this->wechatUrl = $wechatUrl;
        $this->queryParameters["wechat_url"]=$wechatUrl;
    }

    public function getCreativeType() {
        return $this->creativeType;
    }

    public function setCreativeType($creativeType) {
        $this->creativeType = $creativeType;
        $this->queryParameters["creative_type"]=$creativeType;
    }

    public function getAnimationType() {
        return $this->animationType;
    }

    public function setAnimationType($animationType) {
        $this->animationType = $animationType;
        $this->queryParameters["animation_type"]=$animationType;
    }

    public function getAnimationUrl() {
        return $this->animationUrl;
    }

    public function setAnimationUrl($animationUrl) {
        $this->animationUrl = $animationUrl;
        $this->queryParameters["animation_url"]=$animationUrl;
    }

    public function getAnimationWidth() {
        return $this->animationWidth;
    }

    public function setAnimationWidth($animationWidth) {
        $this->animationWidth = $animationWidth;
        $this->queryParameters["animation_width"]=$animationWidth;
    }

    public function getAnimationHeight() {
        return $this->animationHeight;
    }

    public function setAnimationHeight($animationHeight) {
        $this->animationHeight = $animationHeight;
        $this->queryParameters["animation_height"]=$animationHeight;
    }

    public function getAnimationMonitorUrl() {
        return $this->animationMonitorUrl;
    }

    public function setAnimationMonitorUrl($animationMonitorUrl) {
        $this->animationMonitorUrl = $animationMonitorUrl;
        $this->queryParameters["animation_monitor_url"]=$animationMonitorUrl;
    }

    public function getMonitorUrl() {
        return $this->monitorUrl;
    }

    public function setMonitorUrl($monitorUrl) {
        $this->monitorUrl = $monitorUrl;
        $this->queryParameters["monitor_url"]=$monitorUrl;
    }

    public function getClickMonitorUrl() {
        return $this->clickMonitorUrl;
    }

    public function setClickMonitorUrl($clickMonitorUrl) {
        $this->clickMonitorUrl = $clickMonitorUrl;
        $this->queryParameters["click_monitor_url"]=$clickMonitorUrl;
    }

    public function getCreativeStatus() {
        return $this->creativeStatus;
    }

    public function setCreativeStatus($creativeStatus) {
        $this->creativeStatus = $creativeStatus;
        $this->queryParameters["creative_status"]=$creativeStatus;
    }

    public function getUserDefine() {
        return $this->userDefine;
    }

    public function setUserDefine($userDefine) {
        $this->userDefine = $userDefine;
        $this->queryParameters["user_define"]=$userDefine;
    }

}