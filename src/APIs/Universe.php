<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Universe extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'universe';
        $this->orthrus = $orthrus;
    }

    protected function getSchematic(Int $schematicId)
    {
        $this->verb = 'get';
        $this->endpoint = 'schematics/' . $schematicId;
    }

    protected function getPlanet(Int $planetId)
    {
        $this->verb = 'get';
        $this->endpoint = 'planets/' . $planetId;
    }

    protected function getStation(Int $stationId)
    {
        $this->verb = 'get';
        $this->endpoint = 'stations/' . $stationId;
    }

    protected function getStructure(Int $structureId)
    {
        $this->verb = 'get';
        $this->endpoint = 'structures/' . $planetId;
    }

    protected function getSystem(Int $systemId)
    {
        $this->verb = 'get';
        $this->endpoint = 'systems/' . $systemId;
    }

    protected function getSystems()
    {
        $this->verb = 'get';
        $this->endpoint = 'systems';
    }

    protected function getType(Int $typeId)
    {
        $this->verb = 'get';
        $this->endpoint = 'types/' . $typeId;
    }

    protected function getTypes()
    {
        $this->verb = 'get';
        $this->endpoint = 'types';
    }

    protected function getGroup(Int $groupId)
    {
        $this->verb = 'get';
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function getGroups()
    {
        $this->verb = 'get';
        $this->endpoint = 'groups';
    }

    protected function getCategory(Int $categoryId)
    {
        $this->verb = 'get';
        $this->endpoint = 'category/' . $categoryId;
    }

    protected function getCategories()
    {
        $this->verb = 'get';
        $this->endpoint = 'categories/' . $categoryId;
    }

    protected function getNames(array $ids)
    {
        $this->verb = 'post';
        $this->body = $ids;
        $this->endpoint = 'names';
    }

    protected function getStructures()
    {
        $this->verb = 'get';
        $this->endpoint = 'structures';
    }

    protected function getRaces()
    {
        $this->verb = 'get';
        $this->endpoint = 'races';
    }

    protected function getFactions()
    {
        $this->verb = 'get';
        $this->endpoint = 'factions';
    }

    protected function getBloodlines()
    {
        $this->verb = 'get';
        $this->endpoint = 'bloodlines';
    }

    protected function getRegions()
    {
        $this->verb = 'get';
        $this->endpoint = 'regions';
    }

    protected function getRegion(Int $regionId)
    {
        $this->verb = 'get';
        $this->endpoint = 'regions/' . $regionId;
    }

    protected function getConstellations()
    {
        $this->verb = 'get';
        $this->endpoint = 'constellations';
    }

    protected function getConstellation(Int $constellationId)
    {
        $this->verb = 'get';
        $this->endpoint = 'constellations/' . $constellationId;
    }

    protected function getMoon(Int $moonId)
    {
        $this->verb = 'get';
        $this->endpoint = 'moons/' . $moonId;
    }

    protected function getStargate(Int $stargateId)
    {
        $this->verb = 'get';
        $this->endpoint = 'stargates/' . $starGateId;
    }

    protected function getGraphics()
    {
        $this->verb = 'get';
        $this->endpoint = 'graphics';
    }

    protected function getGraphic(Int $graphicId)
    {
        $this->verb = 'get';
        $this->endpoint = 'graphics/' . $graphicId;
    }

    protected function getSystemJumps()
    {
        $this->verb = 'get';
        $this->endpoint = 'system_jumps';
    }

    protected function getSystemKills()
    {
        $this->verb = 'get';
        $this->endpoint = 'system_kills';
    }

    protected function getStar(Int $starId)
    {
        $this->verb = 'get';
        $this->endpoint = 'stars/' . $starId;
    }

    protected function getAncestries()
    {
        $this->verb = 'get';
        $this->endpoint = 'ancestries';
    }

    protected function getIds(array $names)
    {
        $this->verb = 'post';
        $this->body = $names;
        $this->endpoint = 'ids';
    }
}
