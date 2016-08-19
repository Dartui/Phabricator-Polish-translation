<?php

/**
 * Locale for "Polish (Poland)".
 */
final class PhutilPolishPolandLocale extends PhutilLocale {

  public function getLocaleCode() {
    return 'pl_PL';
  }

  public function getLocaleName() {
    return pht('Polish (Poland)');
  }

  public function selectPluralVariant($variant, array $translations) {
    list($singular, $paucal, $plural) = $translations;

    if ($variant == 1) {
      return $singular;
    }

    if ($variant >= 2 && $variant <= 4) {
      return $paucal;
    }

    return $plural;
  }

}
