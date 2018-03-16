# Orthrus

Orthrus is a simple opinionated implementation of ESI for Laravel that provides an easy to use interface for all ESI endpoints, delivering original JSON responses in easily accessible Eloquent collections.

## Installing Orthrus

### Require Orthrus via Composer

Simply require Orthrus through Composer to pull the package into your project.

```
composer require michaelcooke/orthrus
```

### Configure Eseye

Orthrus depends on [Eseye](https://github.com/eveseat/eseye) to take care of caching, logging, and making ESI requests that Orthrus builds up. Configuring Eseye may be done through your `.env` configuration file, making switching between ESI application details as well as caching and logging mechanisms between production and development environments easy.

Include the following in your `.env` configuration file and add your ESI application client id and key. In addition, you may specify a refresh token to use for all Orthrus ESI calls by default.

```
ESEYE_CLIENT_ID=
ESEYE_SECRET_KEY=
ESEYE_REFRESH_TOKEN=
ESEYE_DATASOURCE=tranquility
ESEYE_CACHE=
```

`ESEYE_DATASOURCE` may be `tranquility` or `singularity`.
`ESEYE_CACHE` may be `file`, `redis` or `memcached`, and will attempt to use default configuration options where applicable.

## Using Orthrus

Accessing ESI endpoints through Orthrus is easily done with a natural syntax while adhering closely to the verbage of the ESI spec. An easy-to-use `ESI` facade is also provided, making ESI calls dead-simple.

### Making ESI Calls

Orthrus's syntax is straight-forward and adheres closely to the verbage and conventions of the ESI spec.
```
ESI::character($characterId)->get();      // GET /character/{$characterId}/
ESI::character($characterId)->portrait(); // GET /character/{$characterId}/portrait/
```

In some cases, aliases are provided to reflect more common verbage that may differ from the ESI spec.
```
ESI::character($characterId)->corporationHistory(); // GET /character/{$characterId}/corporation_history/
ESI::character($characterId)->employmentHistory();  // GET /character/{$characterId}/corporation_history/

ESI::character($characterId)->agentsResearch();     // GET /character/{$characterId}/agents_research/
ESI::character($characterId)->researchAgents();     // GET /character/{$characterId}/agents_research/
```

### Accessing the Response

Every ESI call made through Orthrus will return an object decoded from the original JSON response.
```
ESI::character(94087852)->get()->name; // Michael Mach
```

## Helper Methods

### Set ESI Route Version

By default, Orthrus will use the `/latest/` version route for all ESI calls. You may override this for an ESI call.

```
ESI::version('v1')->character($characterId)->get();
```

### Set/Override Default Refresh Token

You may set or override the default refresh token for all ESI calls made through Orthrus for a request lifecycle.

```
ESI::setRefreshToken($token);
```

### Reset Default Refresh Token

If you wish to set the default refresh token for all ESI calls made through Orthrus after changing it with `setRefreshToken()`, you may reset it to the default defined in your `.env` configuration file.

```
ESI::resetRefreshToken();
```

### Using Alternative Refresh Token For One ESI Call

You may use an alternative refresh token for a single ESI call through Orthrus.

This is particularly useful for endpoints which require the call to be made from a refresh token belonging to a character with a particular role or level of access in a corporation, and you don't want to set and reset the refresh token used by Orthrus manually.

```
ESI::corporation($corporationId)->roles()->withRefreshToken($token);
```

### Accessing Ancillary Response Information

It can be useful in some situations to be able to evaluate the response code, expiration, and potential error message from a response. To do so, you may use the following methods below.

```
ESI::responseCode();
ESI::responseExpires();
ESI::responseErrorMessage();
```
