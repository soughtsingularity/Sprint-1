<?php

include 'classes/LearningResource.php';

echo "Cronograma de clases:\n";
echo "\n";

$clase1 = new LearningResource(name: "PHP para todos", topic: Topic::PHP, url: "www.php.info", resourceType: ResourceType::VIDEO);
$clase2 = new LearningResource(name: "Estilizando la web", topic: Topic::CSS, url: "www.css.info", resourceType: ResourceType::WEB_ARTICLE);
$clase3 = new LearningResource(name: "LOs datos en orden", topic: Topic::MYSQL, url: "www.mysql.info", resourceType: ResourceType::FILE);
$clase4 = new LearningResource(name: "Facilitador farragoso", topic: Topic::LARAVEL, url: "www.laravel.info", resourceType: ResourceType::VIDEO);

echo "Clase 1:\n";
echo "Nombre:" . $clase1->getName() . "\n";
echo "Tema:" . $clase1->getTopicName() . "\n";
echo "URL:" . $clase1->getUrl() . "\n";
echo "Tipo de recurso:" . $clase1->getResourceTypeName() . "\n";

echo "\n";
