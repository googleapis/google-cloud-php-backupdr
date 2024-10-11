<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BackupConfigInfo has information about how the resource is configured
 * for Backup and about the most recent backup to this vault.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.BackupConfigInfo</code>
 */
class BackupConfigInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The status of the last backup to this BackupVault
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupConfigInfo.LastBackupState last_backup_state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_backup_state = 0;
    /**
     * Output only. If the last backup were successful, this field has the
     * consistency date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_successful_backup_consistency_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_successful_backup_consistency_time = null;
    /**
     * Output only. If the last backup failed, this field has the error message.
     *
     * Generated from protobuf field <code>.google.rpc.Status last_backup_error = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_backup_error = null;
    protected $backup_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $last_backup_state
     *           Output only. The status of the last backup to this BackupVault
     *     @type \Google\Protobuf\Timestamp $last_successful_backup_consistency_time
     *           Output only. If the last backup were successful, this field has the
     *           consistency date.
     *     @type \Google\Rpc\Status $last_backup_error
     *           Output only. If the last backup failed, this field has the error message.
     *     @type \Google\Cloud\BackupDR\V1\GcpBackupConfig $gcp_backup_config
     *           Configuration for a Google Cloud resource.
     *     @type \Google\Cloud\BackupDR\V1\BackupApplianceBackupConfig $backup_appliance_backup_config
     *           Configuration for an application backed up by a Backup Appliance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The status of the last backup to this BackupVault
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupConfigInfo.LastBackupState last_backup_state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLastBackupState()
    {
        return $this->last_backup_state;
    }

    /**
     * Output only. The status of the last backup to this BackupVault
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupConfigInfo.LastBackupState last_backup_state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLastBackupState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\BackupConfigInfo\LastBackupState::class);
        $this->last_backup_state = $var;

        return $this;
    }

    /**
     * Output only. If the last backup were successful, this field has the
     * consistency date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_successful_backup_consistency_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastSuccessfulBackupConsistencyTime()
    {
        return $this->last_successful_backup_consistency_time;
    }

    public function hasLastSuccessfulBackupConsistencyTime()
    {
        return isset($this->last_successful_backup_consistency_time);
    }

    public function clearLastSuccessfulBackupConsistencyTime()
    {
        unset($this->last_successful_backup_consistency_time);
    }

    /**
     * Output only. If the last backup were successful, this field has the
     * consistency date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_successful_backup_consistency_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastSuccessfulBackupConsistencyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_successful_backup_consistency_time = $var;

        return $this;
    }

    /**
     * Output only. If the last backup failed, this field has the error message.
     *
     * Generated from protobuf field <code>.google.rpc.Status last_backup_error = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getLastBackupError()
    {
        return $this->last_backup_error;
    }

    public function hasLastBackupError()
    {
        return isset($this->last_backup_error);
    }

    public function clearLastBackupError()
    {
        unset($this->last_backup_error);
    }

    /**
     * Output only. If the last backup failed, this field has the error message.
     *
     * Generated from protobuf field <code>.google.rpc.Status last_backup_error = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setLastBackupError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->last_backup_error = $var;

        return $this;
    }

    /**
     * Configuration for a Google Cloud resource.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.GcpBackupConfig gcp_backup_config = 4;</code>
     * @return \Google\Cloud\BackupDR\V1\GcpBackupConfig|null
     */
    public function getGcpBackupConfig()
    {
        return $this->readOneof(4);
    }

    public function hasGcpBackupConfig()
    {
        return $this->hasOneof(4);
    }

    /**
     * Configuration for a Google Cloud resource.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.GcpBackupConfig gcp_backup_config = 4;</code>
     * @param \Google\Cloud\BackupDR\V1\GcpBackupConfig $var
     * @return $this
     */
    public function setGcpBackupConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\GcpBackupConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Configuration for an application backed up by a Backup Appliance.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupApplianceBackupConfig backup_appliance_backup_config = 5;</code>
     * @return \Google\Cloud\BackupDR\V1\BackupApplianceBackupConfig|null
     */
    public function getBackupApplianceBackupConfig()
    {
        return $this->readOneof(5);
    }

    public function hasBackupApplianceBackupConfig()
    {
        return $this->hasOneof(5);
    }

    /**
     * Configuration for an application backed up by a Backup Appliance.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupApplianceBackupConfig backup_appliance_backup_config = 5;</code>
     * @param \Google\Cloud\BackupDR\V1\BackupApplianceBackupConfig $var
     * @return $this
     */
    public function setBackupApplianceBackupConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\BackupApplianceBackupConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getBackupConfig()
    {
        return $this->whichOneof("backup_config");
    }

}
