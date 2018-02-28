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

class UpdateAdPlanRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "UpdateAdPlan");
        $this->setUriPattern("/adplan/[Id]");
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

    private $adPlanName;
    private $adType;
    private $quotaStatus;
    private $dailyMaxQuota;
    private $startTime;
    private $endTime;
    private $deliveryTime;
    private $adPlanStatus;

    public function getAdPlanName() {
        return $this->adPlanName;
    }

    public function setAdPlanName($adPlanName) {
        $this->adPlanName = $adPlanName;
        $this->queryParameters["ad_plan_name"]=$adPlanName;
    }

    public function getAdType() {
        return $this->adType;
    }

    public function setAdType($adType) {
        $this->adType = $adType;
        $this->queryParameters["ad_type"]=$adType;
    }

    public function getQuotaStatus() {
        return $this->quotaStatus;
    }

    public function setQuotaStatus($quotaStatus) {
        $this->quotaStatus = $quotaStatus;
        $this->queryParameters["quota_status"]=$quotaStatus;
    }

    public function getDailyMaxQuota() {
        return $this->dailyMaxQuota;
    }

    public function setDailyMaxQuota($dailyMaxQuota) {
        $this->dailyMaxQuota = $dailyMaxQuota;
        $this->queryParameters["daily_max_quota"]=$dailyMaxQuota;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime($startTime) {
        $this->startTime = $startTime;
        $this->queryParameters["start_time"]=$startTime;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime($endTime) {
        $this->endTime = $endTime;
        $this->queryParameters["end_time"]=$endTime;
    }

    public function getDeliveryTime() {
        return $this->deliveryTime;
    }

    public function setDeliveryTime($deliveryTime) {
        $this->deliveryTime = $deliveryTime;
        $this->queryParameters["delivery_time"]=$deliveryTime;
    }

    public function getAdPlanStatus() {
        return $this->adPlanStatus;
    }

    public function setAdPlanStatus($adPlanStatus) {
        $this->adPlanStatus = $adPlanStatus;
        $this->queryParameters["ad_plan_status"]=$adPlanStatus;
    }

}