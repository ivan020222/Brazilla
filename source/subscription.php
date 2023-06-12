<?php
const SUBSCRIPTIONS_FILE = '../storage/subscriptions.ser';
/**
* Дістає список із усіх підписок з файлу
* @return array
*/
function allSubscriptions($filename)
{
 $fileContent = file_get_contents($filename);
 $subscriptions = unserialize($fileContent);
 return $subscriptions ? $subscriptions : [];
}
/**
* Додає запис нової підписки у файл
* @param $params
*/
function addSubscription($params)
{
 $subscriptions = allSubscriptions(SUBSCRIPTIONS_FILE);
 $subscriptions[] = $params;
 file_put_contents(SUBSCRIPTIONS_FILE, serialize($subscriptions));
}