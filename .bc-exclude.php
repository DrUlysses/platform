<?php declare(strict_types=1);

return [
    'filePatterns' => [
        '**/Test/**', // Testing
        '**/src/WebInstaller/**', // WebInstaller
        '**/src/Core/Framework/Update/**', // Updater
        '**/src/Core/TestBootstrapper.php', // Testing
        '**/src/Core/Framework/Demodata/Faker/Commerce.php', // dev dependency
        '**/src/Core/DevOps/StaticAnalyze/**', // dev dependency
        '**/src/Core/Profiling/Doctrine/BacktraceDebugDataHolder.php', // dev dependency
        '**/src/Core/Migration/Traits/MigrationUntouchedDbTestTrait.php', // Test code in prod
        '**src/Core/Framework/Script/ServiceStubs.php', // never intended to be extended
        '**/src/Core/DevOps/System/Command/SyncComposerVersionCommand.php', // symfony configure
        '**/src/Core/Framework/Adapter/Asset/AssetInstallCommand.php', // symfony configure

        // Symfony validators, should be removed with NEXT-26264
        '**/src/Core/Framework/DataAbstractionLayer/Validation/EntityNotExists.php',
        '**/src/Core/Framework/DataAbstractionLayer/Validation/EntityExists.php',
        '**/src/Core/Checkout/Customer/Validation/Constraint/CustomerVatIdentification.php',
        '**/src/Core/Checkout/Customer/Validation/Constraint/CustomerEmailUnique.php',
    ],
    'errors' => [
        'Shopware\\\\Core\\\\System\\\\SystemConfig\\\\Util\\\\ConfigReader#\\$xsdFile', // Can not be inspected through reflection (__DIR__ constant)
        'Shopware\\\\Core\\\\Framework\\\\Migration\\\\Exception\\\\UnknownMigrationSourceExceptionBase', // Can not be inspected through reflection if() {class Foo {} }
        'Unable to compile initializer in method', // Can not be inspected through reflection https://github.com/Roave/BackwardCompatibilityCheck/issues/698
        'Could not locate constant .* while trying to evaluate constant expression', // Can not be inspected through reflection https://github.com/Roave/BackwardCompatibilityCheck/issues/698
        'Value.+of.+constant', // Changing const values in not a BC per se

        // Renaming of arguments
        'Parameter 1 of Shopware\\\\Elasticsearch\\\\Framework\\\\Indexing\\\\IndexerOffset#__construct\(\) changed name from definitions to mappingDefinitions',

        // Property type change from int to float
        'Type of property Shopware\\\\Core\\\\Framework\\\\Rule\\\\Container\\\\DaysSinceRule#$daysPassed changed from int|null to float|null',

        // added Predis support, can be removed after 6.5.6.0 release
        'Shopware\\\\Core\\\\Framework\\\\Adapter\\\\Cache\\\\RedisConnectionFactory#create',
        'Shopware\\\\Core\\\\Framework\\\\Increment\\\\RedisIncrementer#__construct',
        'Shopware\\\\Core\\\\Framework\\\\App\\\\Payment\\\\Payload\\\\Struct\\\\SyncPayPayload#__construct()',

        // Removed boot method from Bundle
        'Shopware\\\\Core\\\\Framework\\\\Bundle#boot',

        // __set cannot have a return value
        'The return type of Shopware\\\\Core\\\\Checkout\\\\Document\\\\DocumentConfiguration#__set\(\) changed from no type to void',

        // Should be removed with NEXT-29044
        'The return type of Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\CustomerRecoveryIsExpiredRoute#getDecorated\(\) changed from Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractResetPasswordRoute to the non-covariant Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractCustomerRecoveryIsExpiredRoute',
        'The return type of Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\CustomerRecoveryIsExpiredRoute#getDecorated\(\) changed from Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractResetPasswordRoute to Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractCustomerRecoveryIsExpiredRoute',
        'The return type of Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractCustomerRecoveryIsExpiredRoute#getDecorated\(\) changed from Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractResetPasswordRoute to the non-covariant Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractCustomerRecoveryIsExpiredRoute',
        'The return type of Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractCustomerRecoveryIsExpiredRoute#getDecorated\(\) changed from Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractResetPasswordRoute to Shopware\\\\Core\\\\Checkout\\\\Customer\\\\SalesChannel\\\\AbstractCustomerRecoveryIsExpiredRoute',

        // Renaming of arguments
        'Parameter 1 of Shopware\\\\Elasticsearch\\\\Framework\\\\Indexing\\\\IndexerOffset#__construct\(\) changed name from definitions to mappingDefinitions',

        // Property type change from int to float
        'Type of property Shopware\\\\Core\\\\Framework\\\\Rule\\\\Container\\\\DaysSinceRule#$daysPassed changed from int|null to float|null'
    ],
];
