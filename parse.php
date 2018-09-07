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

$fh = array();

while ($reader->read()) {
  if($reader->nodeType == XMLReader::ELEMENT && $reader->name === 'Placemark') {
    $node = simplexml_import_dom($doc->importNode($reader->expand(), true));
    $point = explode(',', (string)$node->Point->coordinates);
    $data = array();
    $lines = explode('</li>', (string)$node->description);
    foreach($lines AS $line) {
      $line = strip_tags(substr($line, strpos($line, '<li>')));
      $parts = explode(': ', $line);
      if(count($parts) === 2) {
        $data[$parts[0]] = $parts[1];
      }
    }
    $data['longitude'] = $point[0];
    $data['latitude'] = $point[1];
    if(!isset($fh[$data['nptype']])) {
      $fh[$data['nptype']] = fopen($dataPath . '/' . $data['nptype'] . '.csv', 'w');
      fputcsv($fh[$data['nptype']], array_keys($data));
    }
    fputcsv($fh[$data['nptype']], $data);
  }
}
