# base.module.migration.userfields.provider.datetime

<table>
<tr>
<td>
<a href="https://github.com/Liventin/base.module.migration.userfields">Bitrix Base Module Service Migration User Fields</a>
</td>
</tr>
</table>

install | update

```
"require": {
    "liventin/base.module.migration.userfields.provider.datetime": "dev-main"
}
"repositories": [
    {
      "type": "vcs",
      "url": "git@github.com:liventin/base.module.migration.userfields.provider.datetime"
    }
]
```
redirect (optional)
```
"extra": {
  "service-redirect": {
    "liventin/base.module.migration.userfields.provider.datetime": "module.name",
  }
}
```
PhpStorm Life Template Example
```php
<?php

namespace ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Migration\UserFields;

use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Service\Container;
use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Service\Migration\UserField\UserFieldEntity;
use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Service\Migration\UserField\UserFieldService;
use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Src\Migration\UserField\Providers\DateTimeProvider;

class ExampleDateTimeUserField implements UserFieldEntity
{
    public static function getEntityId(): string
    {
        return 'USER';
    }

    public static function getFieldName(): string
    {
        return 'UF_EXAMPLE_DATETIME_FIELD';
    }

    public static function getUserTypeId(): string
    {
        return 'datetime';
    }

    public static function getParams(): array
    {
        /** @var DateTimeProvider ${DS}provider */
        ${DS}provider = Container::get(UserFieldService::SERVICE_CODE)->getProvider(self::getUserTypeId());
        return ${DS}provider
            ->setSort(150)
            ->setMandatory(false)
            ->setShowFilter(true)
            ->setIsSearchable(true)
            ->setDefaultValue('2025-01-01 00:00:00')
            ->setUseSeconds(true)
            ->setUseTimeZone(false)
            ->setLabels('Дата и время пользователя')
            ->getParamsToArray();
    }
}
```