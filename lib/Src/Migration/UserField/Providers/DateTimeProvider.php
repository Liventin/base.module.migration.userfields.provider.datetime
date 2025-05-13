<?php

namespace Base\Module\Src\Migration\UserField\Providers;

class DateTimeProvider extends UserFieldProvider
{
    public static function getType(): string
    {
        return 'datetime';
    }

    public function setDefaultValue(?string $defaultValue): self
    {
        $this->settings['DEFAULT_VALUE'] = $defaultValue;
        return $this;
    }

    public function setUseSeconds(bool $useSeconds): self
    {
        $this->settings['USE_SECOND'] = $useSeconds ? 'Y' : 'N';
        return $this;
    }

    public function setUseTimeZone(bool $useTimeZone): self
    {
        $this->settings['USE_TIMEZONE'] = $useTimeZone ? 'Y' : 'N';
        return $this;
    }
}
