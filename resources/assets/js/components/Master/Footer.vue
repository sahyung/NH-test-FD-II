<template>
  <div class="footer--wrapper">
    <div class="container">
      <footer-contact />
      <div class="row m-top-40">
        <footer-about-us />
        <footer-why-us />
        <footer-newsletter />
        <footer-social-media />
      </div>
      <footer-payment />
      <footer-copyright />
    </div>
  </div>
</template>

<script>
import FooterContact from '@components/master/footer/FooterContact.vue';
import FooterPayment from '@components/master/footer/FooterPayment.vue';
import FooterNewsletter from '@components/master/footer/FooterNewsletter.vue';
import FooterSocialMedia from '@components/master/footer/FooterSocialMedia.vue';
import FooterCopyright from '@components/master/footer/FooterCopyright.vue';
import FooterAboutUs from '@components/master/footer/FooterAboutUs.vue';
import FooterWhyUs from '@components/master/footer/FooterWhyUs.vue';

export default {
  components: {
    FooterContact,
    FooterPayment,
    FooterNewsletter,
    FooterSocialMedia,
    FooterCopyright,
    FooterAboutUs,
    FooterWhyUs,
  },
};
</script>
