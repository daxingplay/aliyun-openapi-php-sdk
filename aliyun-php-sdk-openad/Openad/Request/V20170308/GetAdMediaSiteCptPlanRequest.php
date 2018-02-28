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

class GetAdMediaSiteCptPlanRequest extends \RoaAcsRequest
{
    function  __construct()
    {
        parent::__construct("OA", "2017-03-08", "GetAdMediaSiteCptPlan");
        $this->setUriPattern("/mediaadsiteinfo/schedule/[Id]/");
        $this->setMethod("GET");
    }

    public function getId() {
      return $this->getPathParameters()["Id"];
    }

    public function setId($id) {
      $this->putPathParameter("Id", $id);
    }

    private $advertiserId;
    private $planName;
    private $pid;
    private $startTime;
    private $endTime;
    private $deliveryHour;
    private $cptPrice;

    public function getAdvertiserId() {
        return $this->advertiserId;
    }

    public function setAdvertiserId($advertiserId) {
        $this->advertiserId = $advertiserId;
        $this->queryParameters["advertiser_id"]=$advertiserId;
    }

    public function getPlanName() {
        return $this->planName;
    }

    public function setPlanName($planName) {
        $this->planName = $planName;
        $this->queryParameters["plan_name"]=$planName;
    }

    public function getPid() {
        return $this->pid;
    }

    public function setPid($pid) {
        $this->pid = $pid;
        $this->queryParameters["pid"]=$pid;
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

    public function getDeliveryHour() {
        return $this->deliveryHour;
    }

    public function setDeliveryHour($deliveryHour) {
        $this->deliveryHour = $deliveryHour;
        $this->queryParameters["delivery_hour"]=$deliveryHour;
    }

    public function getCptPrice() {
        return $this->cptPrice;
    }

    public function setCptPrice($cptPrice) {
        $this->cptPrice = $cptPrice;
        $this->queryParameters["cpt_price"]=$cptPrice;
    }

}