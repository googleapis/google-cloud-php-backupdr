<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupdr.proto

namespace Google\Cloud\BackupDR\V1\ManagementServer;

use UnexpectedValueException;

/**
 * Type of backup service resource.
 *
 * Protobuf type <code>google.cloud.backupdr.v1.ManagementServer.InstanceType</code>
 */
class InstanceType
{
    /**
     * Instance type is not mentioned.
     *
     * Generated from protobuf enum <code>INSTANCE_TYPE_UNSPECIFIED = 0;</code>
     */
    const INSTANCE_TYPE_UNSPECIFIED = 0;
    /**
     * Instance for backup and restore management (i.e., AGM).
     *
     * Generated from protobuf enum <code>BACKUP_RESTORE = 1;</code>
     */
    const BACKUP_RESTORE = 1;

    private static $valueToName = [
        self::INSTANCE_TYPE_UNSPECIFIED => 'INSTANCE_TYPE_UNSPECIFIED',
        self::BACKUP_RESTORE => 'BACKUP_RESTORE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

