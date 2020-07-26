<template>
  <div class="">
    <hero />
    <hero-elements />
    <hosting-packages />
    <php-limit />
    <hr class="mini-hr" />
    <bundles />
    <hr class="mini-hr" />
    <laravel-support />
    <php-modules />
    <linux-support />
    <share />
    <support />
  </div>
</template>

<script>
import Hero from '@components/main/Hero.vue';
import HeroElements from '@components/main/HeroElements.vue';
import HostingPackages from '@components/main/HostingPackages.vue';
import PhpLimit from '@components/main/PhpLimit.vue';
import LaravelSupport from '@components/main/LaravelSupport.vue';
import Bundles from '@components/main/Bundles.vue';
import PhpModules from '@components/main/PhpModules.vue';
import LinuxSupport from '@components/main/LinuxSupport.vue';
import Share from '@components/main/Share.vue';
import Support from '@components/main/Support.vue';

export default {
  components: {
    Hero,
    HeroElements,
    HostingPackages,
    PhpLimit,
    LaravelSupport,
    Bundles,
    PhpModules,
    LinuxSupport,
    Share,
    Support,
  },
};
</script>
