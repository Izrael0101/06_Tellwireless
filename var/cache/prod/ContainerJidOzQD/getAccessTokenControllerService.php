<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCkmQJUo75dTfEO'."\n".'Vc3wi9paOzeuLEyA7xltCtC955zbknNm579Hu1t5DXM6EJh9L3SVms9U8aklVacx'."\n".'Eg8HNrrDctUjUu2SkT1apqW9HGtiVoVsD05gGE8O5kxO1qMpotQJsHQF/XUR3Kp4'."\n".'kAiOCxP5nMtenbL8sZOfELHdxxy0pX0peBnSRYx3H66B/u8zorIz6thT0rQM1PeO'."\n".'XNG59GfaBzIe4PxvsQhMSIfPPB+XeqdV15BHkVAlGiLJe8V5775zHyvnR3urxyJj'."\n".'XFB3Y8R+2mo2S4nIH2shndPvMavcPtBlTcOCOp+vuLkTlXjYu4YNIFySvYhBvPbh'."\n".'hJ0y5tt9AgMBAAECggEALpYT/8q8lYH66TjF6gBbU9CQ6N4m5RNHWgKGpElKrybb'."\n".'PNP44p+Xu0JgS53o2v20fKdtaThgzG1avdvDnyIRaEI3KyFMloA/IkoqfMTva8zb'."\n".'RINshmw67Beon2PGmIE6jGeB3zQmj2CqaycxFKr0A2EqemQeBcFo68t43DF/4WzF'."\n".'NbiRgzb3A1+/ExI80F5UdmmCXiVMNFR/dO52fHPLcTmlPULLX91+O1ch7Gym8t9j'."\n".'ZvBD2C/u/THJqjzcfAx1EMuBYRXSshPncl4Ff7luOSE/ED7P6ZhSHe7Ob7lR/6GX'."\n".'A94/CkO8mL/0MyhGb0dbygxoXMPqoIsDzcdCHZH4TQKBgQDOYNL2KHHdmn37WMrF'."\n".'6tGVP1AHllgijMJk6KWLyaCWP2sY614huM7/kfGsdYZJOhgVqf9O1r5PxA6cVD8k'."\n".'ezyWNqEBF+fmfurfHFUzZmroUTJOR7QxSitY0Trhl3BDs92qfBJsZrWeMINrUPT5'."\n".'V29imejb0Uj5dRXS84OHmffVJwKBgQDMLHkKfiq19v7TIJLafAuT4nvq19gGm/uc'."\n".'RlKSwgUuNdTiYkFw+UFRGqdF9Sj2Z3SP5nMYYCtMtlODwKdRDyNRkVJKYRWjcnc+'."\n".'dQHX4kwRmGq7bTg9JWMpe5z51+ddPdid67LYyoXdCn85X82evlflb2664mGd9e/+'."\n".'FuWGUJmYuwKBgCG4SD/YE+K1X2g19cuotl3AXn8e3X+nqAt8x6+zXf2ulv0XV+YC'."\n".'oC+51NbszOgiCdVgVUq4Y5f83LZGPZrkV93jRyM6mLVcf1u88V7YmRckTSflJ1f2'."\n".'WmbEqO47JCirtsgoRYpYrcwO+SoLrDshQh3GL/nalCXOL6asCw2Y5pl5AoGANSxv'."\n".'6ZeqL/G/s+SL2nLr4PvfIe5MyIvfH3gBEU+OYdaLNto4COAhbqnuXn3WyTVwWfm+'."\n".'h96j6DqjzXBjIu06WYfrUouuQv8Qpyd572t0PDDhuyZauzH9fVRAMaFVFCeDPr2f'."\n".'um4kJskRETQuLOWNpqc6w1kp6yWd9yKnbC+ZkPkCgYBHQgNNZrJu0yAjNSaWYPT7'."\n".'vc7S9iW/G4tW1WfRxB/G7CzRWfndtBkTfP2JHzF3yRK8+IjcXylRcmTjazOyd7GV'."\n".'MptPIehNtICt+jzOHwzShYG4UVZoWW9rQ84EJo9zvS/FpknKj4HdEXz1DxyuLjFT'."\n".'s5NaNDFbFtDiSCzk5j2rCg=='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000873eba3c83dea62071ff1e438b51abffac8d50e180e91c96371f65628b05d5f80a89c43ea87a81d0284a09b0a61dc03bd189f6960854050b2f206030f4d4b37e');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
