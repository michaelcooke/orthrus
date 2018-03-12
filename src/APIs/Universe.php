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
        $this->endpoint = 'schematics/' . $schematicId;
    }

    protected function getPlanet(Int $planetId)
    {
        $this->endpoint = 'planets/' . $planetId;
    }

    protected function getStation(Int $stationId)
    {
        $this->endpoint = 'stations/' . $stationId;
    }

    protected function getStructure(Int $structureId)
    {
        $this->endpoint = 'structures/' . $planetId;
    }

    protected function getSystem(Int $systemId)
    {
        $this->endpoint = 'systems/' . $systemId;
    }

    protected function getSystems()
    {
        $this->endpoint = 'systems';
    }

    protected function getType(Int $typeId)
    {
        $this->endpoint = 'types/' . $typeId;
    }

    protected function getTypes()
    {
        $this->endpoint = 'types';
    }

    protected function getGroup(Int $groupId)
    {
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function getGroups()
    {
        $this->endpoint = 'groups';
    }

    protected function getCategory(Int $categoryId)
    {
        $this->endpoint = 'category/' . $categoryId;
    }

    protected function getCategories()
    {
        $this->endpoint = 'categories';
    }

    protected function getNames(array $ids)
    {
        $this->verb = 'post';
        $this->body = $ids;
        $this->endpoint = 'names';
    }

    protected function getStructures()
    {
        $this->endpoint = 'structures';
    }

    protected function getRaces()
    {
        $this->endpoint = 'races';
    }

    protected function getFactions()
    {
        $this->endpoint = 'factions';
    }

    protected function getBloodlines()
    {
        $this->endpoint = 'bloodlines';
    }

    protected function getRegions()
    {
        $this->endpoint = 'regions';
    }

    protected function getRegion(Int $regionId)
    {
        $this->endpoint = 'regions/' . $regionId;
    }

    protected function getConstellations()
    {
        $this->endpoint = 'constellations';
    }

    protected function getConstellation(Int $constellationId)
    {
        $this->endpoint = 'constellations/' . $constellationId;
    }

    protected function getMoon(Int $moonId)
    {
        $this->endpoint = 'moons/' . $moonId;
    }

    protected function getStargate(Int $stargateId)
    {
        $this->endpoint = 'stargates/' . $starGateId;
    }

    protected function getGraphics()
    {
        $this->endpoint = 'graphics';
    }

    protected function getGraphic(Int $graphicId)
    {
        $this->endpoint = 'graphics/' . $graphicId;
    }

    protected function getSystemJumps()
    {
        $this->endpoint = 'system_jumps';
    }

    protected function getSystemKills()
    {
        $this->endpoint = 'system_kills';
    }

    protected function getStar(Int $starId)
    {
        $this->endpoint = 'stars/' . $starId;
    }

    protected function getAncestries()
    {
        $this->endpoint = 'ancestries';
    }

    protected function getIds(array $names)
    {
        $this->verb = 'post';
        $this->body = $names;
        $this->endpoint = 'ids';
    }
}
