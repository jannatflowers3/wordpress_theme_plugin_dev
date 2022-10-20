<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace WPStaging\Vendor\Google\Service\PeopleService;

class ModifyContactGroupMembersRequest extends \WPStaging\Vendor\Google\Collection
{
    protected $collection_key = 'resourceNamesToRemove';
    /**
     * @var string[]
     */
    public $resourceNamesToAdd;
    /**
     * @var string[]
     */
    public $resourceNamesToRemove;
    /**
     * @param string[]
     */
    public function setResourceNamesToAdd($resourceNamesToAdd)
    {
        $this->resourceNamesToAdd = $resourceNamesToAdd;
    }
    /**
     * @return string[]
     */
    public function getResourceNamesToAdd()
    {
        return $this->resourceNamesToAdd;
    }
    /**
     * @param string[]
     */
    public function setResourceNamesToRemove($resourceNamesToRemove)
    {
        $this->resourceNamesToRemove = $resourceNamesToRemove;
    }
    /**
     * @return string[]
     */
    public function getResourceNamesToRemove()
    {
        return $this->resourceNamesToRemove;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\WPStaging\Vendor\Google\Service\PeopleService\ModifyContactGroupMembersRequest::class, 'WPStaging\\Vendor\\Google_Service_PeopleService_ModifyContactGroupMembersRequest');
