<?php
return array (
  1 => 
  array (
    'urlruleid' => '1',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/index.html|{$categorydir}{$catdir}/page_{$page}.html',
    'example' => 'news/china/1000.html',
  ),
  6 => 
  array (
    'urlruleid' => '6',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '0',
    'urlrule' => 'index.php?m=content&c=index&a=lists&catid={$catid}|index.php?m=content&c=index&a=lists&catid={$catid}&page={$page}',
    'example' => 'index.php?m=content&c=index&a=lists&catid=1&page=1',
  ),
  11 => 
  array (
    'urlruleid' => '11',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/{$id}.html|{$categorydir}{$catdir}/{$id}_{$page}.html',
    'example' => '栏目/id.html',
  ),
  12 => 
  array (
    'urlruleid' => '12',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/{$id}.html|{$categorydir}{$catdir}/{$id}_{$page}.html',
    'example' => '栏目/id.html',
  ),
  16 => 
  array (
    'urlruleid' => '16',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'index.php?m=content&c=index&a=show&catid={$catid}&id={$id}|index.php?m=content&c=index&a=show&catid={$catid}&id={$id}&page={$page}',
    'example' => 'index.php?m=content&c=index&a=show&catid=1&id=1',
  ),
  17 => 
  array (
    'urlruleid' => '17',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'show-{$catid}-{$id}-{$page}.html',
    'example' => 'show-1-2-1.html',
  ),
  18 => 
  array (
    'urlruleid' => '18',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'content-{$catid}-{$id}-{$page}.html',
    'example' => 'content-1-2-1.html',
  ),
  30 => 
  array (
    'urlruleid' => '30',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '0',
    'urlrule' => 'list-{$catid}-{$page}.html',
    'example' => 'list-1-1.html',
  ),
  31 => 
  array (
    'urlruleid' => '31',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/index.html|{$categorydir}{$catdir}/page_{$page}.html',
    'example' => 'love/jd/XXX.id',
  ),
  32 => 
  array (
    'urlruleid' => '32',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/{$id}.html|{$categorydir}{$catdir}/{$id}_{$page}.html',
    'example' => 'love/目录/id.html',
  ),
  33 => 
  array (
    'urlruleid' => '33',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/index.html|{$categorydir}{$catdir}/page_{$page}.html',
    'example' => 'sweet/qh/',
  ),
  34 => 
  array (
    'urlruleid' => '34',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/{$id}.html|{$categorydir}{$catdir}/{$id}_{$page}.html',
    'example' => 'sweet/qh/id.html',
  ),
  35 => 
  array (
    'urlruleid' => '35',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/index.html|{$categorydir}{$catdir}/page_{$page}.html',
    'example' => 'lizhi/lz/',
  ),
  36 => 
  array (
    'urlruleid' => '36',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/{$id}.html|{$categorydir}{$catdir}/{$id}_{$page}.html',
    'example' => 'lizhi/lz/id.html',
  ),
  37 => 
  array (
    'urlruleid' => '37',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/index.html|{$categorydir}{$catdir}/page_{$page}.html',
    'example' => 'sanwen/aq/',
  ),
  38 => 
  array (
    'urlruleid' => '38',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/{$id}.html|{$categorydir}{$catdir}/{$id}_{$page}.html',
    'example' => 'sanwen/aq/id.html',
  ),
);
?>