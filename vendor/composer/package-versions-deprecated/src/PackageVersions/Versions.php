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
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.0@9f3e3f3cc5399604c0325d5ffa92609d694d950d',
  'doctrine/dbal' => '2.10.4@47433196b6390d14409a33885ee42b6208160643',
  'doctrine/doctrine-bundle' => '2.2.2@044d33eeffdb236d5013b6b4af99f87519e10751',
  'doctrine/doctrine-migrations-bundle' => '3.0.2@b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.2@6195e836ffc2e1bd5ddea468fa46015fbea00b3a',
  'doctrine/orm' => '2.8.1@242cf1a33df1b8bc5e1b86c3ebd01db07851c833',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.2@4a66e4e0d3279d3bb3722963b4294331fabe15bc',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v5.2.1@d254631bc20fb82a5827602dc2fa84a3118ec3f5',
  'symfony/cache' => 'v5.2.1@5e61d63b1ef4fb4852994038267ad45e12f3ec52',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.2.1@d0a82d965296083fe463d655a3644cbe49cbaa80',
  'symfony/console' => 'v5.2.1@47c02526c532fb381374dab26df05e7313978976',
  'symfony/dependency-injection' => 'v5.2.1@7f8a9e9eff0581a33e20f6c5d41096fe22832d25',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.2.1@11c8761e32a94100d67e32500599c5f83ddcaeae',
  'symfony/dotenv' => 'v5.2.1@204a9dc6f70a13d9d24ebbf2c5ce51be235f3d7b',
  'symfony/error-handler' => 'v5.2.1@59b190ce16ddf32771a22087b60f6dafd3407147',
  'symfony/event-dispatcher' => 'v5.2.1@1c93f7a1dff592c252574c79a8635a8a80856042',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.2.1@f9a7c7eb461df6d5d99738346039de71685de6af',
  'symfony/filesystem' => 'v5.2.1@fa8f8cab6b65e2d99a118e082935344c5ba8c60d',
  'symfony/finder' => 'v5.2.1@0b9231a5922fd7287ba5b411893c0ecd2733e5ba',
  'symfony/flex' => 'v1.11.0@ceb2b4e612bd0b4bb36a4d7fb2e800c861652f48',
  'symfony/form' => 'v5.2.1@27b1df421c73a2d219f9f5b203f0ec972f0b1de0',
  'symfony/framework-bundle' => 'v5.2.1@0663407ca5ad12e2e3fe657b32266904b3dc1e3f',
  'symfony/http-client' => 'v5.2.1@a77cbec69ea90dea509beef29b79748c0df33a83',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.2.1@a1f6218b29897ab52acba58cfa905b83625bef8d',
  'symfony/http-kernel' => 'v5.2.1@1feb619286d819180f7b8bc0dc44f516d9c62647',
  'symfony/intl' => 'v5.2.1@53927f98c9201fe5db3cfc4d574b1f4039020297',
  'symfony/mailer' => 'v5.2.1@3f34fa977efca75ad17f1416ecb4605f27dbb75e',
  'symfony/mime' => 'v5.2.1@de97005aef7426ba008c46ba840fc301df577ada',
  'symfony/monolog-bridge' => 'v5.2.1@c024671adcac903b142dd952306a243d35843963',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/notifier' => 'v5.2.1@8e24385d24f2bbdff9416934db0acf2b6c3018c3',
  'symfony/options-resolver' => 'v5.2.1@87a2a4a766244e796dd9cb9d6f58c123358cd986',
  'symfony/polyfill-intl-grapheme' => 'v1.22.0@267a9adeb8ecb8071040a740930e077cdfb987af',
  'symfony/polyfill-intl-icu' => 'v1.22.0@b2b1e732a6c039f1a3ea3414b3379a2433e183d6',
  'symfony/polyfill-intl-idn' => 'v1.22.0@0eb8293dbbcd6ef6bf81404c9ce7d95bcdf34f44',
  'symfony/polyfill-intl-normalizer' => 'v1.22.0@6e971c891537eb617a00bb07a43d182a6915faba',
  'symfony/polyfill-mbstring' => 'v1.22.0@f377a3dd1fde44d37b9831d68dc8dea3ffd28e13',
  'symfony/polyfill-php73' => 'v1.22.0@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.0@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v5.2.1@bd8815b8b6705298beaa384f04fabd459c10bedd',
  'symfony/property-access' => 'v5.2.1@243dcdda2f276cb31efa31a015d0fdb5076931ce',
  'symfony/property-info' => 'v5.2.1@f65694a05eb7742c5f2951f20676de367ffaaaea',
  'symfony/proxy-manager-bridge' => 'v5.2.1@fba051ee1cb00d1d40672ee2da842ba23c572576',
  'symfony/routing' => 'v5.2.1@934ac2720dcc878a47a45c986b483a7ee7193620',
  'symfony/security-bundle' => 'v5.2.1@5a4e431445432c02b88c885c778765b50d92c6d5',
  'symfony/security-core' => 'v5.2.1@d058598fa48e06c3f774450f08fd926b982e33eb',
  'symfony/security-csrf' => 'v5.2.1@fc91cd67b6fcbeae3e5aff854c722fa05b5d133b',
  'symfony/security-guard' => 'v5.2.1@0fb0e644feac3d6a122c2c27c9ef8823ba7f1c49',
  'symfony/security-http' => 'v5.2.1@40023b8e14e5928b26df6a099cec0bf0c30eb3be',
  'symfony/serializer' => 'v5.2.1@4af81510bb603a6d255691a88e118add2bba6337',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.2.1@2b105c0354f39a63038a1d8bf776ee92852813af',
  'symfony/string' => 'v5.2.1@5bd67751d2e3f7d6f770c9154b8fbcb2aa05f7ed',
  'symfony/translation' => 'v5.2.1@a04209ba0d1391c828e5b2373181dac63c52ee70',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.2.1@378a136a41c07b5f2086f753d9756fb018921f86',
  'symfony/twig-bundle' => 'v5.2.1@8cb3208aec4655ae1495afad7ef3c032a236dfa7',
  'symfony/validator' => 'v5.2.1@312d36715799ca1d195ee8dbf258b31d1a3cbf7b',
  'symfony/var-dumper' => 'v5.2.1@13e7e882eaa55863faa7c4ad7c60f12f1a8b5089',
  'symfony/var-exporter' => 'v5.2.1@fbc3507f23d263d75417e09a12d77c009f39676c',
  'symfony/web-link' => 'v5.2.1@e805314ad8c4298d9bfc75335e35f83d6db2f43f',
  'symfony/yaml' => 'v5.2.1@290ea5e03b8cf9b42c783163123f54441fb06939',
  'twig/extra-bundle' => 'v3.2.1@07c94c7dcfe7e49abd45d4083ca5544a34969714',
  'twig/twig' => 'v3.2.1@f795ca686d38530045859b0350b5352f7d63447d',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'doctrine/data-fixtures' => '1.4.4@16a03fadb5473f49aad70384002dfd5012fe680e',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'symfony/browser-kit' => 'v5.2.1@87d6f0a7436b03a57d4cf9a6a9cd0c83a355c49a',
  'symfony/css-selector' => 'v5.2.1@f789e7ead4c79e04ca9a6d6162fc629c89bd8054',
  'symfony/debug-bundle' => 'v5.2.1@c79722fc3d430810d7a764fbc84fe212e532e004',
  'symfony/dom-crawler' => 'v5.2.1@ee7cf316fb0de786cfe5ae32ee79502b290c81ea',
  'symfony/maker-bundle' => '1.27.0@a47408fa6e39034a5abe324a46f4e6733266267a',
  'symfony/phpunit-bridge' => 'v5.2.1@235823f6d215c9bd930a47a496e62c1354cde55b',
  'symfony/web-profiler-bundle' => 'v5.2.1@6cd2f3d01faf1d77125ec14150a6fbd062dbe211',
  'symfony/polyfill-ctype' => '*@ef7369ab42c1de15527ff9da7d2dc00b574d87fe',
  'symfony/polyfill-iconv' => '*@ef7369ab42c1de15527ff9da7d2dc00b574d87fe',
  'symfony/polyfill-php72' => '*@ef7369ab42c1de15527ff9da7d2dc00b574d87fe',
  '__root__' => 'dev-master@ef7369ab42c1de15527ff9da7d2dc00b574d87fe',
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
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
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
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
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
}
