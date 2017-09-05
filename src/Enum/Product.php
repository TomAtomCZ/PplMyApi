<?php
/**
 * Copyright (C) 2016 Adam Schubert <adam.schubert@sg1-game.net>.
 */

namespace Salamek\PplMyApi\Enum;


class Product
{
    const PPL_PARCEL_CZ_BUSINESS = 1;
    const PPL_PARCEL_CZ_BUSINESS_COD = 2;
    const PPL_PARCEL_CZ_AFTERNOON_PACKAGE = 7;
    const PPL_PARCEL_CZ_AFTERNOON_PACKAGE_COD = 8;
    const EXPORT_PACKAGE = 9;
    const EXPORT_PACKAGE_COD = 10;
    const PPL_PARCEL_IMPORT = 11;
    const PPL_PARCEL_CZ_PRIVATE = 13;
    const PPL_PARCEL_CZ_PRIVATE_COD = 14;
    const COMPANY_PALETTE = 15;
    const COMPANY_PALETTE_COD = 16;
    const PRIVATE_PALETTE = 19;
    const PRIVATE_PALETTE_COD = 20;
    const PARCEL_CONNECT = 36;
    const PARCEL_CONNECT_COD = 37;

    /** @var array */
    public static $list = [
        self::PPL_PARCEL_CZ_BUSINESS,
        self::PPL_PARCEL_CZ_BUSINESS_COD,
        self::PPL_PARCEL_CZ_AFTERNOON_PACKAGE,
        self::PPL_PARCEL_CZ_AFTERNOON_PACKAGE_COD,
        self::EXPORT_PACKAGE,
        self::EXPORT_PACKAGE_COD,
        self::PPL_PARCEL_CZ_PRIVATE,
        self::PPL_PARCEL_CZ_PRIVATE_COD,
        self::COMPANY_PALETTE,
        self::COMPANY_PALETTE_COD,
        self::PRIVATE_PALETTE,
        self::PRIVATE_PALETTE_COD,
        self::PARCEL_CONNECT,
        self::PARCEL_CONNECT_COD
    ];

    public static $cashOnDelivery = [
        self::PPL_PARCEL_CZ_BUSINESS_COD,
        self::PPL_PARCEL_CZ_AFTERNOON_PACKAGE_COD,
        self::EXPORT_PACKAGE_COD,
        self::PPL_PARCEL_CZ_PRIVATE_COD,
        self::COMPANY_PALETTE_COD,
        self::PRIVATE_PALETTE_COD,
        self::PARCEL_CONNECT_COD
    ];
    
    public static $eveningDelivery = [
        self::PPL_PARCEL_CZ_PRIVATE,
        self::PPL_PARCEL_CZ_PRIVATE_COD,
    ];
    
    public static $names = [
        self::PPL_PARCEL_CZ_BUSINESS => 'PPL Parcel CZ Bussines',
        self::PPL_PARCEL_CZ_BUSINESS_COD => 'PPL Parcel CZ Bussines - dobírka',
        self::PPL_PARCEL_CZ_AFTERNOON_PACKAGE => 'PPL Parcel CZ Afternoon',
        self::PPL_PARCEL_CZ_AFTERNOON_PACKAGE_COD => 'PPL Parcel CZ Afternoon - dobírka',
        self::EXPORT_PACKAGE => 'Exportní balík',
        self::EXPORT_PACKAGE_COD => 'Exportní balík - dobírka',
        self::PPL_PARCEL_CZ_PRIVATE => 'PPL Parcel CZ Private',
        self::PPL_PARCEL_CZ_PRIVATE_COD => 'PPL Parcel CZ Private - dobírka',
        self::COMPANY_PALETTE => 'PPL Company palette',
        self::COMPANY_PALETTE_COD => 'PPL Company palette - dobírka',
        self::PRIVATE_PALETTE => 'PPL Private palette',
        self::PRIVATE_PALETTE_COD => 'PPL Private palette - dobírka',
        self::PARCEL_CONNECT => 'PPL Parcel Connect',
        self::PARCEL_CONNECT_COD => 'PPL Parcel Connect - dobírka',
    ];
}