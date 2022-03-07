<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '3.1.3@96b0053775a544b4a6ab47654dac0621be8b4cf8',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.3@62a188ce2192e6b3b7a2019c26c5001778818b83',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.3.0@1967775546df997eb97057911d80184c91c92b9a',
  'doctrine/orm' => '2.10.1@f346379c7bf39a9f46771cfd9043e0eb2dd98793',
  'doctrine/persistence' => '2.2.2@4ce4712e6dc84a156176a0fbbb11954a25c93103',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.4.3@bb324850d09dd437b6acb142c13e64fdc725b0e1',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'sensio/framework-extra-bundle' => 'v6.2.0@3f5b6490878f8a70ba702e9692007cf979b42f0e',
  'symfony/asset' => 'v5.3.4@9bd222a8fdd13ecca91384e403247103198f80a1',
  'symfony/cache' => 'v5.3.8@945bcebfef0aeef105de61843dd14105633ae38f',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v5.3.4@4268f3059c904c61636275182707f81645517a37',
  'symfony/console' => 'v5.3.7@8b1008344647462ae6ec57559da166c2bfa5e16a',
  'symfony/dependency-injection' => 'v5.3.8@e39c344e06a3ceab531ebeb6c077e6652c4a0829',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v5.3.8@212521017d81686bdc84a132fb5de2b03867a7e7',
  'symfony/dotenv' => 'v5.3.8@12888c9c46ac750ec5c1381db5bf3d534e7d70cb',
  'symfony/error-handler' => 'v5.3.7@3bc60d0fba00ae8d1eaa9eb5ab11a2bbdd1fc321',
  'symfony/event-dispatcher' => 'v5.3.7@ce7b20d69c66a20939d8952b617506a44d102130',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/filesystem' => 'v5.3.4@343f4fe324383ca46792cae728a3b6e2f708fb32',
  'symfony/finder' => 'v5.3.7@a10000ada1e600d109a6c7632e9ac42e8bf2fb93',
  'symfony/flex' => 'v1.16.3@f05406b33681409b83285f4d2ff4efbca7c55b03',
  'symfony/form' => 'v5.3.10@656a1e370b1a617ba2fd42700b5e73dc24e8b60c',
  'symfony/framework-bundle' => 'v5.3.8@ea6e30a8c9534d87187375ef4ee39d48ee40dd2d',
  'symfony/google-mailer' => 'v5.3.11@57b90c8ea4adad199aff2b236f8ddaed0547c4a0',
  'symfony/http-client' => 'v5.3.11@3f55da60fc3c3d6e6a4144ee65a37d23a637107e',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.7@e36c8e5502b4f3f0190c675f1c1f1248a64f04e5',
  'symfony/http-kernel' => 'v5.3.9@ceaf46a992f60e90645e7279825a830f733a17c5',
  'symfony/mailchimp-mailer' => 'v5.3.4@c55fb977ad2d299ae3c4d1946a5d6ca190641d61',
  'symfony/mailer' => 'v5.3.9@c1f83da2296741110be35dd779f2a9e412cec466',
  'symfony/mime' => 'v5.3.11@dffc0684f10526db12c52fcd6238c64695426d61',
  'symfony/options-resolver' => 'v5.3.7@4b78e55b179003a42523a362cc0e8327f7a69b5e',
  'symfony/password-hasher' => 'v5.3.8@4bdaa0cca1fb3521bc1825160f3b5490c130bbda',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/property-access' => 'v5.3.8@2fbab5f95ddb6b8e85f38a6a8a04a17c0acc4d66',
  'symfony/property-info' => 'v5.3.8@39de5bed8c036f76ec0457ec52908e45d5497947',
  'symfony/proxy-manager-bridge' => 'v5.3.4@76e61f33f6a34a340bf6e02211214f466e8e1dba',
  'symfony/routing' => 'v5.3.7@be865017746fe869007d94220ad3f5297951811b',
  'symfony/runtime' => 'v5.3.4@685a4a5491e25c7f2dd251d8fcca583b427ff290',
  'symfony/security-bundle' => 'v5.3.12@be52715f4a7fd490937e4f881dc00ff5c0dcfeb3',
  'symfony/security-core' => 'v5.3.11@48c8ed9f4789439427917f0023f86895d64b73a7',
  'symfony/security-csrf' => 'v5.3.4@94b533195cf7fb21f3fae8ce349861c6401d969e',
  'symfony/security-guard' => 'v5.3.7@25f8d2a206505514a0ff14b16c4fb4e17a10cf18',
  'symfony/security-http' => 'v5.3.11@c25090783bd4209a42f9c43a235280fd23315a62',
  'symfony/sendgrid-mailer' => 'v5.3.14@6fbc372c064b34157e772cce719fdc5b5f935b9f',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v5.3.4@b24c6a92c6db316fee69e38c80591e080e41536c',
  'symfony/string' => 'v5.3.7@8d224396e28d30f81969f083a58763b8b9ceb0a5',
  'symfony/templating' => 'v5.3.7@768d2fc5a9c9c93aad8c10af834a89f9d9d31011',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v5.3.7@503e12aded4d5cbda4f8d1f3824c6a108119822f',
  'symfony/twig-bundle' => 'v5.3.4@345965b40c1847ebdbb2ab0eb98c71a98a5e167b',
  'symfony/validator' => 'v5.3.10@a85f3ba9e1c883253fc00a2e3d111e6e82a0baf5',
  'symfony/var-dumper' => 'v5.3.8@eaaea4098be1c90c8285543e1356a09c8aa5c8da',
  'symfony/var-exporter' => 'v5.3.8@a7604de14bcf472fe8e33f758e9e5b7bf07d3b91',
  'symfony/yaml' => 'v5.3.6@4500fe63dc9c6ffc32d3b1cb0448c329f9c814b7',
  'symfonycasts/reset-password-bundle' => 'v1.10.0@cfebb54e1090900dc5666be5ee1877cd50ae3241',
  'symfonycasts/verify-email-bundle' => 'v1.6.0@55487a5e55ab67ad77a84eefd1c92b0fab47e6ce',
  'twig/extra-bundle' => 'v3.3.3@fa92b8301ff8878e45fe9f54ab7ad99872e080f3',
  'twig/twig' => 'v3.3.3@a27fa056df8a6384316288ca8b0fa3a35fdeb569',
  'doctrine/data-fixtures' => '1.5.1@f18adf13f6c81c67a88360dca359ad474523f8e3',
  'doctrine/doctrine-fixtures-bundle' => '3.4.1@31ba202bebce0b66fe830f49f96228dcdc1503e7',
  'nikic/php-parser' => 'v4.13.0@50953a2691a922aa1769461637869a0a2faa3f53',
  'symfony/debug-bundle' => 'v5.3.4@356c7d2acb6bc93b1c091255068ccfb9ad55a3e0',
  'symfony/maker-bundle' => 'v1.34.1@c9ae401f3fa2b42881120d33ad79416630d1f2be',
  'symfony/web-profiler-bundle' => 'v5.3.8@9ba1e05fdc7a46979047ba6c8949bd35e3a386a5',
  'symfony/polyfill-ctype' => '*@2a21005c14d5dd507697f8f64855ab2fecc923e2',
  'symfony/polyfill-iconv' => '*@2a21005c14d5dd507697f8f64855ab2fecc923e2',
  'symfony/polyfill-php72' => '*@2a21005c14d5dd507697f8f64855ab2fecc923e2',
  '__root__' => 'dev-main@2a21005c14d5dd507697f8f64855ab2fecc923e2',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
