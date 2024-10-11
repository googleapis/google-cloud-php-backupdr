<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault_gce.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ComputeInstanceDataSourceProperties represents the properties of a
 * ComputeEngine resource that are stored in the DataSource.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.ComputeInstanceDataSourceProperties</code>
 */
class ComputeInstanceDataSourceProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the compute instance backed up by the datasource.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The description of the Compute Engine instance.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * The machine type of the instance.
     *
     * Generated from protobuf field <code>string machine_type = 3;</code>
     */
    protected $machine_type = '';
    /**
     * The total number of disks attached to the Instance.
     *
     * Generated from protobuf field <code>int64 total_disk_count = 4;</code>
     */
    protected $total_disk_count = 0;
    /**
     * The sum of all the disk sizes.
     *
     * Generated from protobuf field <code>int64 total_disk_size_gb = 5;</code>
     */
    protected $total_disk_size_gb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the compute instance backed up by the datasource.
     *     @type string $description
     *           The description of the Compute Engine instance.
     *     @type string $machine_type
     *           The machine type of the instance.
     *     @type int|string $total_disk_count
     *           The total number of disks attached to the Instance.
     *     @type int|string $total_disk_size_gb
     *           The sum of all the disk sizes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\BackupvaultGce::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the compute instance backed up by the datasource.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the compute instance backed up by the datasource.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The description of the Compute Engine instance.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the Compute Engine instance.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The machine type of the instance.
     *
     * Generated from protobuf field <code>string machine_type = 3;</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * The machine type of the instance.
     *
     * Generated from protobuf field <code>string machine_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * The total number of disks attached to the Instance.
     *
     * Generated from protobuf field <code>int64 total_disk_count = 4;</code>
     * @return int|string
     */
    public function getTotalDiskCount()
    {
        return $this->total_disk_count;
    }

    /**
     * The total number of disks attached to the Instance.
     *
     * Generated from protobuf field <code>int64 total_disk_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalDiskCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_disk_count = $var;

        return $this;
    }

    /**
     * The sum of all the disk sizes.
     *
     * Generated from protobuf field <code>int64 total_disk_size_gb = 5;</code>
     * @return int|string
     */
    public function getTotalDiskSizeGb()
    {
        return $this->total_disk_size_gb;
    }

    /**
     * The sum of all the disk sizes.
     *
     * Generated from protobuf field <code>int64 total_disk_size_gb = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalDiskSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_disk_size_gb = $var;

        return $this;
    }

}
