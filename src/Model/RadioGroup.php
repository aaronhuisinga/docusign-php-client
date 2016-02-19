<?php
/**
 * RadioGroup
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
/**
 * RadioGroup Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RadioGroup implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'document_id' => 'string',
        'recipient_id' => 'string',
        'conditional_parent_label' => 'string',
        'conditional_parent_value' => 'string',
        'group_name' => 'string',
        'radios' => '\DocuSign\eSign\Model\Radio[]',
        'shared' => 'string',
        'require_initial_on_shared_change' => 'string',
        'require_all' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'document_id' => 'documentId',
        'recipient_id' => 'recipientId',
        'conditional_parent_label' => 'conditionalParentLabel',
        'conditional_parent_value' => 'conditionalParentValue',
        'group_name' => 'groupName',
        'radios' => 'radios',
        'shared' => 'shared',
        'require_initial_on_shared_change' => 'requireInitialOnSharedChange',
        'require_all' => 'requireAll'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'document_id' => 'setDocumentId',
        'recipient_id' => 'setRecipientId',
        'conditional_parent_label' => 'setConditionalParentLabel',
        'conditional_parent_value' => 'setConditionalParentValue',
        'group_name' => 'setGroupName',
        'radios' => 'setRadios',
        'shared' => 'setShared',
        'require_initial_on_shared_change' => 'setRequireInitialOnSharedChange',
        'require_all' => 'setRequireAll'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'document_id' => 'getDocumentId',
        'recipient_id' => 'getRecipientId',
        'conditional_parent_label' => 'getConditionalParentLabel',
        'conditional_parent_value' => 'getConditionalParentValue',
        'group_name' => 'getGroupName',
        'radios' => 'getRadios',
        'shared' => 'getShared',
        'require_initial_on_shared_change' => 'getRequireInitialOnSharedChange',
        'require_all' => 'getRequireAll'
    );
  
    
    /**
      * $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
      * @var string
      */
    protected $document_id;
    
    /**
      * $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
      * @var string
      */
    protected $recipient_id;
    
    /**
      * $conditional_parent_label For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
      * @var string
      */
    protected $conditional_parent_label;
    
    /**
      * $conditional_parent_value For conditional fields, this is the value of the parent tab that controls the tab's visibility.\n\nIf the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use \"on\" as the value to show that the parent tab is active.
      * @var string
      */
    protected $conditional_parent_value;
    
    /**
      * $group_name The name of the group.
      * @var string
      */
    protected $group_name;
    
    /**
      * $radios Specifies the locations and status for radio buttons that are grouped together.
      * @var \DocuSign\eSign\Model\Radio[]
      */
    protected $radios;
    
    /**
      * $shared When set to **true**, this custom tab is shared.
      * @var string
      */
    protected $shared;
    
    /**
      * $require_initial_on_shared_change Optional element for field markup. When set to **true**, the signer is required to initial when they modify a shared field.
      * @var string
      */
    protected $require_initial_on_shared_change;
    
    /**
      * $require_all When set to **true** and shared is true, information must be entered in this field to complete the envelope.
      * @var string
      */
    protected $require_all;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->document_id = $data["document_id"];
            $this->recipient_id = $data["recipient_id"];
            $this->conditional_parent_label = $data["conditional_parent_label"];
            $this->conditional_parent_value = $data["conditional_parent_value"];
            $this->group_name = $data["group_name"];
            $this->radios = $data["radios"];
            $this->shared = $data["shared"];
            $this->require_initial_on_shared_change = $data["require_initial_on_shared_change"];
            $this->require_all = $data["require_all"];
        }
    }
    
    /**
     * Gets document_id
     * @return string
     */
    public function getDocumentId()
    {
        return $this->document_id;
    }
  
    /**
     * Sets document_id
     * @param string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        
        $this->document_id = $document_id;
        return $this;
    }
    
    /**
     * Gets recipient_id
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipient_id;
    }
  
    /**
     * Sets recipient_id
     * @param string $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        
        $this->recipient_id = $recipient_id;
        return $this;
    }
    
    /**
     * Gets conditional_parent_label
     * @return string
     */
    public function getConditionalParentLabel()
    {
        return $this->conditional_parent_label;
    }
  
    /**
     * Sets conditional_parent_label
     * @param string $conditional_parent_label For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     * @return $this
     */
    public function setConditionalParentLabel($conditional_parent_label)
    {
        
        $this->conditional_parent_label = $conditional_parent_label;
        return $this;
    }
    
    /**
     * Gets conditional_parent_value
     * @return string
     */
    public function getConditionalParentValue()
    {
        return $this->conditional_parent_value;
    }
  
    /**
     * Sets conditional_parent_value
     * @param string $conditional_parent_value For conditional fields, this is the value of the parent tab that controls the tab's visibility.\n\nIf the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use \"on\" as the value to show that the parent tab is active.
     * @return $this
     */
    public function setConditionalParentValue($conditional_parent_value)
    {
        
        $this->conditional_parent_value = $conditional_parent_value;
        return $this;
    }
    
    /**
     * Gets group_name
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }
  
    /**
     * Sets group_name
     * @param string $group_name The name of the group.
     * @return $this
     */
    public function setGroupName($group_name)
    {
        
        $this->group_name = $group_name;
        return $this;
    }
    
    /**
     * Gets radios
     * @return \DocuSign\eSign\Model\Radio[]
     */
    public function getRadios()
    {
        return $this->radios;
    }
  
    /**
     * Sets radios
     * @param \DocuSign\eSign\Model\Radio[] $radios Specifies the locations and status for radio buttons that are grouped together.
     * @return $this
     */
    public function setRadios($radios)
    {
        
        $this->radios = $radios;
        return $this;
    }
    
    /**
     * Gets shared
     * @return string
     */
    public function getShared()
    {
        return $this->shared;
    }
  
    /**
     * Sets shared
     * @param string $shared When set to **true**, this custom tab is shared.
     * @return $this
     */
    public function setShared($shared)
    {
        
        $this->shared = $shared;
        return $this;
    }
    
    /**
     * Gets require_initial_on_shared_change
     * @return string
     */
    public function getRequireInitialOnSharedChange()
    {
        return $this->require_initial_on_shared_change;
    }
  
    /**
     * Sets require_initial_on_shared_change
     * @param string $require_initial_on_shared_change Optional element for field markup. When set to **true**, the signer is required to initial when they modify a shared field.
     * @return $this
     */
    public function setRequireInitialOnSharedChange($require_initial_on_shared_change)
    {
        
        $this->require_initial_on_shared_change = $require_initial_on_shared_change;
        return $this;
    }
    
    /**
     * Gets require_all
     * @return string
     */
    public function getRequireAll()
    {
        return $this->require_all;
    }
  
    /**
     * Sets require_all
     * @param string $require_all When set to **true** and shared is true, information must be entered in this field to complete the envelope.
     * @return $this
     */
    public function setRequireAll($require_all)
    {
        
        $this->require_all = $require_all;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}