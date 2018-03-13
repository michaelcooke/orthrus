<?php

namespace MichaelCooke\Orthrus\Apis;

class Universe extends Api
{
    public function __construct()
    {
        $this->base = 'universe';
    }

    protected function schematic(Int $schematicId)
    {
        $this->endpoint = 'schematics/' . $schematicId;
    }

    protected function planet(Int $planetId)
    {
        $this->endpoint = 'planets/' . $planetId;
    }

    protected function station(Int $stationId)
    {
        $this->endpoint = 'stations/' . $stationId;
    }

    protected function structure(Int $structureId)
    {
        $this->endpoint = 'structures/' . $planetId;
    }

    protected function system(Int $systemId)
    {
        $this->endpoint = 'systems/' . $systemId;
    }

    protected function systems()
    {
        $this->endpoint = 'systems';
    }

    protected function type(Int $typeId)
    {
        $this->endpoint = 'types/' . $typeId;
    }

    protected function types()
    {
        $this->endpoint = 'types';
    }

    protected function group(Int $groupId)
    {
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function groups()
    {
        $this->endpoint = 'groups';
    }

    protected function category(Int $categoryId)
    {
        $this->endpoint = 'category/' . $categoryId;
    }

    protected function categories()
    {
        $this->endpoint = 'categories';
    }

    protected function names(array $ids)
    {
        $this->verb = 'post';
        $this->body = $ids;
        $this->endpoint = 'names';
    }

    protected function structures()
    {
        $this->endpoint = 'structures';
    }

    protected function races()
    {
        $this->endpoint = 'races';
    }

    protected function factions()
    {
        $this->endpoint = 'factions';
    }

    protected function bloodlines()
    {
        $this->endpoint = 'bloodlines';
    }

    protected function regions()
    {
        $this->endpoint = 'regions';
    }

    protected function region(Int $regionId)
    {
        $this->endpoint = 'regions/' . $regionId;
    }

    protected function constellations()
    {
        $this->endpoint = 'constellations';
    }

    protected function constellation(Int $constellationId)
    {
        $this->endpoint = 'constellations/' . $constellationId;
    }

    protected function moon(Int $moonId)
    {
        $this->endpoint = 'moons/' . $moonId;
    }

    protected function stargate(Int $stargateId)
    {
        $this->endpoint = 'stargates/' . $starGateId;
    }

    protected function graphics()
    {
        $this->endpoint = 'graphics';
    }

    protected function graphic(Int $graphicId)
    {
        $this->endpoint = 'graphics/' . $graphicId;
    }

    protected function systemJumps()
    {
        $this->endpoint = 'system_jumps';
    }

    protected function systemKills()
    {
        $this->endpoint = 'system_kills';
    }

    protected function star(Int $starId)
    {
        $this->endpoint = 'stars/' . $starId;
    }

    protected function ancestries()
    {
        $this->endpoint = 'ancestries';
    }

    protected function ids(array $names)
    {
        $this->verb = 'post';
        $this->body = $names;
        $this->endpoint = 'ids';
    }
}
