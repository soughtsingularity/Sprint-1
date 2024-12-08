<?php

include 'enums/enums.php';

class LearningResource
{
    private $name;
    private $topic;
    private $url;
    private $resourceType;

    public function __construct($name, Topic $topic, $url, ResourceType $resourceType){
        $this->name = $name;
        $this->topic = $topic;
        $this->url = $url;
        $this->resourceType = $resourceType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTopicName(): string
    {
        return $this->topic->value;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getResourceTypeName(): string
    {
        return $this->resourceType->value;
    }

}
