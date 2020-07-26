<template>
  <div class="header--wrapper">
    <header-contact />
    <header-nav />
  </div>
</template>

<script>
import HeaderContact from '@components/master/header/HeaderContact.vue';
import HeaderNav from '@components/master/header/HeaderNav.vue';
export default {
  components: {
    HeaderContact,
    HeaderNav,
  },
  mounted() {},
};
</script>
