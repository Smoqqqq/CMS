<?php

namespace App\Service;

use App\Repository\ConfigurationRepository;

class ConfigurationService
{
    public function __construct(private ConfigurationRepository $configurationRepository)
    {
    }

    public function get(string|false $key = false)
    {
        if ($key) {
            $value = $this->configurationRepository->createQueryBuilder('o')
                ->select('o.' . $key)
                ->getQuery()
                ->getSingleColumnResult();
            return $value[0];
        } else {
            $config = $this->configurationRepository->findOneBy([]);
            return $config;
        }
    }
}
