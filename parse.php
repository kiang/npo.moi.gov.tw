<?php
$tmpPath = __DIR__ . '/tmp';
if(!file_exists($tmpPath)) {
  mkdir($tmpPath, 0777);
}
$tmpFile = $tmpPath . '/npomgis-npv.kml';
if(!file_exists($tmpFile)) {
  file_put_contents($tmpFile, file_get_contents('http://npo.moi.gov.tw/geoserver/npomgis/wms?service=WMS&version=1.1.0&request=GetMap&layers=npomgis:npv&styles=&bbox=-29336.042,2426993.24,348191.801,2917305.211&width=591&height=768&srs=EPSG:3826&format=application%2Fvnd.google-earth.kml%2Bxml'));
}

$dataPath = __DIR__ . '/data';
if(!file_exists($dataPath)) {
  mkdir($dataPath, 0777);
}

$reader = new XMLReader();
$reader->open($tmpFile);
$doc = new DOMDocument;

$fieldSets = array (
  'NP100-1' =>
  array (
    'longitude' => '',
    'latitude' => '',
    'nptype' => '',
    'objid' => '',
    'yyymm' => '',
    'view_cnt' => '',
    'date_created' => '',
    'last_updated' => '',
    'data_class' => '',
    'area_type' => '',
    'pro_local' => '',
    'providers' => '',
    'status' => '',
    'name' => '',
    'director' => '',
    'dir_session' => '',
    'dir_dt' => '',
    'est_dt' => '',
    'caseno' => '',
    'postcode' => '',
    'cntcode' => '',
    'addr' => '',
    'phone' => '',
    'member_num' => '',
    'member_rep_num' => '',
    'fax' => '',
    'email' => '',
    'x' => '',
    'y' => '',
    'geom_twnspcode' => '',
    'dir_dt_start' => '',
    'dir_dt_end' => '',
    'link' => '',
    'disband_dt' => '',
    'purpose' => '',
    'mission' => '',
    'apply_dt' => '',
    'pro_nat' => '',
  ),
  'NP100-2' =>
  array (
    'longitude' => '',
    'latitude' => '',
    'nptype' => '',
    'objid' => '',
    'yyymm' => '',
    'view_cnt' => '',
    'date_created' => '',
    'last_updated' => '',
    'data_class' => '',
    'area_type' => '',
    'social' => '',
    'providers' => '',
    'status' => '',
    'name' => '',
    'director' => '',
    'dir_session' => '',
    'dir_dt' => '',
    'est_dt' => '',
    'caseno' => '',
    'postcode' => '',
    'cntcode' => '',
    'addr' => '',
    'phone' => '',
    'member_num' => '',
    'member_rep_num' => '',
    'fax' => '',
    'email' => '',
    'x' => '',
    'y' => '',
    'geom_twnspcode' => '',
    'dir_dt_start' => '',
    'dir_dt_end' => '',
    'disband_dt' => '',
    'purpose' => '',
    'mission' => '',
    'link' => '',
    'apply_dt' => '',
  ),
  'NP100-3' =>
  array (
    'longitude' => '',
    'latitude' => '',
    'nptype' => '',
    'objid' => '',
    'yyymm' => '',
    'view_cnt' => '',
    'date_created' => '',
    'last_updated' => '',
    'man_created' => '',
    'man_last_updated' => '',
    'data_class' => '',
    'area_type' => '',
    'providers' => '',
    'data_type' => '',
    'status' => '',
    'name' => '',
    'caseno' => '',
    'cntcode' => '',
    'addr' => '',
    'phone' => '',
    'member_num' => '',
    'member_rep_num' => '',
    'x' => '',
    'y' => '',
    'geom_twnspcode' => '',
    'est_dt' => '',
    'email' => '',
    'link' => '',
    'director' => '',
    'dir_session' => '',
    'dir_dt' => '',
    'dir_dt_start' => '',
    'dir_dt_end' => '',
    'director_name' => '',
    'supervisor' => '',
    'disband_dt' => '',
  ),
  'NP200' =>
  array (
    'longitude' => '',
    'latitude' => '',
    'nptype' => '',
    'objid' => '',
    'yyymm' => '',
    'view_cnt' => '',
    'date_created' => '',
    'last_updated' => '',
    'man_created' => '',
    'providers' => '',
    'name' => '',
    'cntcode' => '',
    'addr' => '',
    'phone' => '',
    'ceo' => '',
    'x' => '',
    'y' => '',
    'geom_twnspcode' => '',
  ),
  'NP300' =>
  array (
    'longitude' => '',
    'latitude' => '',
    'nptype' => '',
    'objid' => '',
    'yyymm' => '',
    'view_cnt' => '',
    'date_created' => '',
    'last_updated' => '',
    'man_created' => '',
    'providers' => '',
    'name' => '',
    'cntcode' => '',
    'addr' => '',
    'phone' => '',
    'ceo' => '',
    'gods' => '',
    'sect' => '',
    'build_type' => '',
    'org_type' => '',
    'x' => '',
    'y' => '',
    'geom_twnspcode' => '',
  ),
  'NP400' =>
  array (
    'longitude' => '',
    'latitude' => '',
    'nptype' => '',
    'objid' => '',
    'yyymm' => '',
    'view_cnt' => '',
    'date_created' => '',
    'last_updated' => '',
    'man_created' => '',
    'providers' => '',
    'name' => '',
    'postcode' => '',
    'cntcode' => '',
    'addr' => '',
    'phone' => '',
    'fax' => '',
    'link' => '',
    'x' => '',
    'y' => '',
    'geom_twnspcode' => '',
    'man_last_updated' => '',
  ),
  'NP500' =>
  array (
    'longitude' => '',
    'latitude' => '',
    'nptype' => '',
    'objid' => '',
    'yyymm' => '',
    'view_cnt' => '',
    'date_created' => '',
    'last_updated' => '',
    'man_created' => '',
    'providers' => '',
    'name' => '',
    'postcode' => '',
    'cntcode' => '',
    'addr' => '',
    'phone' => '',
    'fax' => '',
    'link' => '',
    'x' => '',
    'y' => '',
    'geom_twnspcode' => '',
    'man_last_updated' => '',
  ),
  'NP600' =>
  array (
    'longitude' => '',
    'latitude' => '',
    'nptype' => '',
    'objid' => '',
    'yyymm' => '',
    'view_cnt' => '',
    'date_created' => '',
    'last_updated' => '',
    'man_created' => '',
    'providers' => '',
    'name' => '',
    'caseno' => '',
    'cntcode' => '',
    'addr' => '',
    'phone' => '',
    'fax' => '',
    'type' => '',
    'x' => '',
    'y' => '',
    'geom_twnspcode' => '',
    'man_last_updated' => '',
  ),
  'NP700' =>
  array (
    'longitude' => '',
    'latitude' => '',
    'nptype' => '',
    'objid' => '',
    'yyymm' => '',
    'view_cnt' => '',
    'date_created' => '',
    'last_updated' => '',
    'man_created' => '',
    'providers' => '',
    'name' => '',
    'cntcode' => '',
    'addr' => '',
    'x' => '',
    'y' => '',
    'geom_twnspcode' => '',
    'director' => '',
    'phone' => '',
    'man_last_updated' => '',
  ),
);
$fh = array();
while ($reader->read()) {
  if($reader->nodeType == XMLReader::ELEMENT && $reader->name === 'Placemark') {
    $node = simplexml_import_dom($doc->importNode($reader->expand(), true));
    $point = explode(',', (string)$node->Point->coordinates);
    $data = array(
      'longitude' => $point[0],
      'latitude' => $point[1],
    );
    $lines = explode('</li>', (string)$node->description);
    foreach($lines AS $line) {
      $line = strip_tags(substr($line, strpos($line, '<li>')));
      $parts = explode(': ', $line);
      if(count($parts) === 2) {
        $data[$parts[0]] = $parts[1];
      }
    }
    $sortedData = $fieldSets[$data['nptype']];
    foreach($sortedData AS $k => $v) {
      if(isset($data[$k])) {
        $sortedData[$k] = $data[$k];
      }
    }
    if(!isset($fh[$data['nptype']])) {
      $fh[$data['nptype']] = fopen($dataPath . '/' . $data['nptype'] . '.csv', 'w');
      fputcsv($fh[$data['nptype']], array_keys($sortedData));
    }
    fputcsv($fh[$data['nptype']], $sortedData);
  }
}
