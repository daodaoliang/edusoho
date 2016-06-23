<?php
namespace Topxia\Service\RefererLog\Dao;

interface RefererLogDao
{
    public function addRefererLog($referLog);

    public function getRefererLogById($id);

    public function searchAnalysisRefererLogSum($conditions, $groupBy);

    public function searchAnalysisRefererLogs($conditions, $groupBy);
}
